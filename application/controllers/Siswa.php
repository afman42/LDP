<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Siswa extends CI_Controller {

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
		$this->load->view('admin/siswa');
	}

	public function view_siswa()
	{
		$this->load->view('admin/view_siswa');
	}

	public function view_formulir()
	{
		$this->load->view('admin/view_formulir');
	}

	public function view_pembayaran()
	{
		$this->load->view('admin/view_pembayaran');
	}

	public function konfirmasi_siswa($id)
	{
		$this->db->query("UPDATE tbsiswa SET status = 'membayar' WHERE idsiswa='$id'");
		echo "<script>alert('Konfirmasi Pembayaran Berhasil!');location.href='".site_url('siswa')."'</script>";
	}

	public function hapus_siswa($id)
	{
		$this->db->query("DELETE FROM tbsiswa WHERE idsiswa='$id'");
		echo "<script>alert('Siswa berhasil dihapus!');location.href='".site_url('siswa')."'</script>";
	}
}