<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Pengelola extends CI_Controller {

	function __construct()
	{
		parent::__construct();
        if ($_SESSION['status'] != true) {
            echo "<script>alert('Silakan Login Terlebih Dahulu');</script>";
            echo "<script>location.href='".site_url('loginadmin')."'</script>";
        }
	}

	public function index()
	{
		$this->load->view('admin/pengelola');
	}

	public function view_pengelola()
	{
		$this->load->view('admin/view_pengelola');
	}

	public function tambah_pengelola()
	{
		$query = $this->db->query("SELECT max(iduser) as max FROM tbuser");
		$data = $query->row_array();
		$iduser = $data['max'];
		$urutan = (int) substr($iduser, 3, 3);
		$urutan++;
		$huruf = "ADM";
		$iduser = $huruf . sprintf("%03s", $urutan);
		$nama = $_POST['nama'];
		$email = $_POST['email'];
		$password = $_POST['password'];
		$jabatan = $_POST['jabatan'];

		$tambah = "INSERT INTO tbuser (iduser, nama, email, password, jabatan, foto) VALUES ('$iduser' ,'$nama','$email','$password','$jabatan','default.png')";
		if ($this->db->query($tambah)) {
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

	public function view_edit_pengelola()
	{
		$this->load->view('admin/view_edit_pengelola');
	}

	public function ubah_pengelola()
	{
		$iduser = $_POST['iduser'];
		$nama = $_POST['nama'];
		$email = $_POST['email'];
		$password = $_POST['password'];
		$jabatan = $_POST['jabatan'];

		if (empty($password)) {
			$update = "UPDATE tbuser SET nama='$nama', email='$email', jabatan='$jabatan' WHERE iduser='$iduser'";
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
			$update = "UPDATE tbuser SET nama='$nama', email='$email', password='$password', jabatan='$jabatan' WHERE iduser='$iduser'";
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

	public function hapus_pengelola($id)
	{
		$this->db->query("DELETE FROM tbuser WHERE iduser='$id'");
		echo "<script>alert('Data berhasil dihapus!');location.href='".site_url('pengelola')."'</script>";
	}
}