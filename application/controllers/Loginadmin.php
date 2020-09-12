<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Loginadmin extends CI_Controller {

	
	public function index()
	{
		$this->load->view('admin/login');
	}

	public function masuk()
	{	
		$email = $_POST['email'];
		$password = $_POST['password'];

		$login = $this->db->query("SELECT * FROM tbuser WHERE email='$email' AND password='$password'");
		$cek = $login->num_rows();

		if($cek > 0){
			$data = $login->row_array();

			if($data['jabatan']=="Pengelola"){
				$_SESSION['iduser'] = $data['iduser'];
				$_SESSION['status'] = TRUE;
				$_SESSION['jabatan'] = "Pengelola";
				// header("location:../view/dashboard.php");
				redirect('dashboard');

			}else if($data['jabatan']=="Admin"){
				$_SESSION['iduser'] = $data['iduser'];
				$_SESSION['status'] = TRUE;
				$_SESSION['jabatan'] = "Admin";
				// header("location:../view/dashboard_pengelola.php");
				redirect('dashboard_pengelola');
			}else{
				echo 
				"<script>alert('Email atau password yang dimasukkan salah!');location.href='".site_url('loginadmin')."'</script>";
			} 
		} else {
			echo 
			"<script>alert('Email atau password yang dimasukkan salah!');location.href='".site_url('loginadmin')."'</script>";
		}
	}

	public function logout()
	{
		unset($_SESSION['iduser']);
		session_destroy();
		echo "<script>alert('Logout Berhasil!');location.href='".site_url('loginadmin')."';</script>";
	}
}