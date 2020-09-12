<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Laporan extends CI_Controller {

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
		$this->load->view('admin/laporan');
	}

	public function load_view_siswa_2()
	{
		$this->load->view('admin/load_view_siswa_2');
	}

	public function reset_siswa($id)
	{
		$this->db->query("UPDATE tbsiswa SET status = 'menunggu' WHERE idsiswa='$id'");
		echo "<script>alert('Konfirmasi Pembayaran Berhasil!');location.href='".site_url('laporan')."'</script>";
	}
}