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
        $this->load->view('vieweditprofil');
    }

    public function view_struk()
    {
        $this->load->view('user/view-struk');
    }

    public function ubah_profil()
    {
        $idsiswa = $_POST['idsiswa'];
        $idprogram = $_POST['idprogram'];
        $nama = $_POST['nama'];
        $jeniskelamin = $_POST['jeniskelamin'];
        $NIK_KTP = $_POST['NIK_KTP'];
        $NIK_KK = $_POST['NIK_KK'];
        $tempatlahir = $_POST['tempatlahir'];
        $tgllahir = $_POST['tgllahir'];
        $agama = $_POST['agama'];
        $alamat = $_POST['alamat'];
        $kewarganegaraan = $_POST['kewarganegaraan'];
        $nohp = $_POST['nohp'];
        $kelas = $_POST['kelas'];

        $email = $_POST['email'];
        $password = $_POST['password'];

        $namaayah = $_POST['namaayah'];
        $pekerjaanayah = $_POST['pekerjaanayah'];
        $pendapatanayah = $_POST['pendapatanayah'];
        $tahunlahirayah = $_POST['tahunlahirayah'];

        $namaibu = $_POST['namaibu'];
        $pekerjaanibu = $_POST['pekerjaanibu'];
        $pendapatanibu = $_POST['pendapatanibu'];
        $tahunlahiribu = $_POST['tahunlahiribu'];

        $namawali = $_POST['namawali'];
        $pekerjaanwali = $_POST['pekerjaanwali'];
        $pendapatanwali = $_POST['pendapatanwali'];
        $tahunlahirwali = $_POST['tahunlahirwali'];

        if (empty($password)) {
            $update = "UPDATE tbsiswa SET idprogram='$idprogram', nama='$nama', jeniskelamin='$jeniskelamin', NIK_KTP='$NIK_KTP', NIK_KK='$NIK_KK', tempatlahir='$tempatlahir', tgllahir='$tgllahir', agama='$agama', alamat='$alamat', kewarganegaraan='$kewarganegaraan', nohp='$nohp', namaayah='$namaayah', pekerjaanayah='$pekerjaanayah', pendapatanayah='$pendapatanayah', tahunlahirayah='$tahunlahirayah', namaibu='$namaibu', pekerjaanibu='$pekerjaanibu', pendapatanibu='$pendapatanibu', tahunlahiribu='$tahunlahiribu', namawali='$namawali', pekerjaanwali='$pekerjaanwali', pendapatanwali='$pendapatanwali', tahunlahirwali='$tahunlahirwali', email='$email', kelas='$kelas' WHERE idsiswa='$idsiswa'";
            if ($this->db->query($update)) {
                echo json_encode(array(
                    'status' => 'success',
                    'message'=> 'success message'
                ));
            } else {
                echo json_encode(array(
                    'status' => 'error',
                    'message'=> 'error message'
                ));
            } 
        } else {
            $update = "UPDATE tbsiswa SET idprogram='$idprogram', nama='$nama', jeniskelamin='$jeniskelamin', NIK_KTP='$NIK_KTP', NIK_KK='$NIK_KK', tempatlahir='$tempatlahir', tgllahir='$tgllahir', agama='$agama', alamat='$alamat', kewarganegaraan='$kewarganegaraan', nohp='$nohp', namaayah='$namaayah', pekerjaanayah='$pekerjaanayah', pendapatanayah='$pendapatanayah', tahunlahirayah='$tahunlahirayah', namaibu='$namaibu', pekerjaanibu='$pekerjaanibu', pendapatanibu='$pendapatanibu', tahunlahiribu='$tahunlahiribu', namawali='$namawali', pekerjaanwali='$pekerjaanwali', pendapatanwali='$pendapatanwali', tahunlahirwali='$tahunlahirwali', email='$email', password='$password', kelas='$kelas' WHERE idsiswa='$idsiswa'";
            if ($this->db->query($update)) {
                echo json_encode(array(
                    'status' => 'success',
                    'message'=> 'success message'
                ));
            } else {
                echo json_encode(array(
                    'status' => 'error',
                    'message'=> 'error message'
                ));
            } 
        }
    }
}