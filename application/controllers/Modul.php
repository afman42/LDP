<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Modul extends CI_Controller {

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
		$this->load->view('admin/modul');
	}

	public function view_modul()
	{
		$this->load->view('admin/view_modul');
	}

	public function view_edit_modul()
	{
		$this->load->view('admin/view_edit_modul');
	}

	public function ubah_modul()
	{
		$idmodul = $_POST['idmodul'];
		$idprogram = $_POST['idprogram'];
		$namamodul = $_FILES['namamodul']['name'];
		$file_tmp = $_FILES['namamodul']['tmp_name'];
		move_uploaded_file($file_tmp, 'assets/dist/modul/'.$namamodul);
		if (empty($namamodul)) {
			$update = "UPDATE tbmodul SET idprogram='$idprogram' WHERE idmodul='$idmodul'";
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
		}  else {
			$update = "UPDATE tbmodul SET idprogram='$idprogram', namamodul='$namamodul' WHERE idmodul='$idmodul'";
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

	public function tambah_modul()
	{
		$query = $this->db->query( "SELECT max(idmodul) as max FROM tbmodul");
		$data = $query->row_array();
		$idmodul = $data['max'];
		$urutan = (int) substr($idmodul, 3, 3);
		$urutan++;
		$huruf = "MDL";
		$idmodul = $huruf . sprintf("%03s", $urutan);
		$idprogram = $_POST['idprogram'];
		$namamodul = $_FILES['namamodul']['name'];
		$file_tmp = $_FILES['namamodul']['tmp_name'];
		move_uploaded_file($file_tmp, 'assets/dist/modul/'.$namamodul);

		$tambah = "INSERT INTO tbmodul (idmodul, idprogram, namamodul) VALUES ('$idmodul' ,'$idprogram','$namamodul')";
		if ($this->db->query( $tambah)) {
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

	public function hapus_modul($id)
	{
		$this->db->query("DELETE FROM tbmodul WHERE idmodul='$id'");
		echo "<script>alert('Data berhasil dihapus!');location.href='".site_url('modul')."'</script>";
	}
}