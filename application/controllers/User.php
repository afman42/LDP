<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class User extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        if ($_SESSION['status'] != true) {
            echo "<script>alert('Silakan Login Terlebih Dahulu');</script>";
            echo "<script>location.href='".site_url('login/masuk')."'</script>";
        }
    }

    public function profil()
    {
        $this->load->view('user/profil');
    }

    public function upload_bukti()
    {
        $this->load->view('user/upload_bukti');
    }

    public function upload_bukti_foto()
    {
        $idsiswa = $_SESSION['login_id'];
        $upload_bukti = $_FILES['upload_bukti']['name'];
        $file_tmp = $_FILES['upload_bukti']['tmp_name'];
        move_uploaded_file($file_tmp, 'assets/dist/bukti/'.$upload_bukti);

        $update = $this->db->query("UPDATE tbsiswa SET upload_bukti = '$upload_bukti' WHERE idsiswa='$idsiswa'");
        if ($update) {
            // var_dump($update);
            echo "<script type='text/javascript'>alert('Upload Sukses!');location.href='".site_url('user/payment')."';</script>";
        } else {
            echo "<script type='text/javascript'>alert('Gagal Upload!');location.href='".site_url('user/upload_bukti')."';</script>";
        }
    }

    public function payment()
    {
        $this->load->view('user/payment');
    }

    public function view_edit_profil()
    {
        $data['x'] = $this->db->get_where('tbsiswa',['idsiswa' => $_SESSION['login_id']])->row_array();
        $data['program'] = $this->db->get("tbprogrampaket");
        $this->load->view('vieweditprofil',$data);
    }
}