<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$this->load->view('template-home/header');
		$this->load->view('home/index');
		$this->load->view('template-home/footer');
	}

	public function profil_lembaga()
	{
		$this->load->view('template-home/header');
		$this->load->view('home/profil-lembaga');
		$this->load->view('template-home/footer');
	}

	public function program_paket()
	{
		$this->load->view('template-home/header');
		$this->load->view('home/program-paket');
		$this->load->view('template-home/footer');
	}

	public function struktur()
	{
		$this->load->view('template-home/header');
		$this->load->view('home/struktur');
		$this->load->view('template-home/footer');
	}

	public function visi_dan_misi()
	{
		$this->load->view('template-home/header');
		$this->load->view('home/visi');
		$this->load->view('template-home/footer');
	}
}
