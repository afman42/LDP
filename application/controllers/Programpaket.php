<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Programpaket extends CI_Controller {

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
		$this->load->view('admin/program_paket');
	}

	public function view_paket()
	{
		$this->load->view('admin/view_paket');
	}

	public function hapus_paket($id)
	{
		$this->db->query("DELETE FROM tbprogrampaket WHERE idprogram='$id'");
		echo "<script>alert('Data berhasil dihapus!');location.href='".site_url('programpaket')."'</script>";
	}

	public function view_edit_paket()
	{
		$this->load->view('admin/view_edit_paket');
	}

	public function ubah_paket()
	{
		$idprogram = $_POST['idprogram'];
		$namaprogram = $_POST['namaprogram'];
		$harga = $_POST['harga'];

		$update = "UPDATE tbprogrampaket SET namaprogram='$namaprogram', harga='$harga' WHERE idprogram='$idprogram'";
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

	public function tambah_paket()
	{
		$query = $this->db->query( "SELECT max(idprogram) as max FROM tbprogrampaket");
		$data = $query->row_array();
		$idprogram = $data['max'];
		$urutan = (int) substr($idprogram, 3, 3);
		$urutan++;
		$huruf = "PPT";
		$idprogram = $huruf . sprintf("%03s", $urutan);
		$namaprogram = $_POST['namaprogram'];
		$harga = $_POST['harga'];

		$tambah = "INSERT INTO tbprogrampaket (idprogram, namaprogram, harga) VALUES ('$idprogram' ,'$namaprogram','$harga')";
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
}