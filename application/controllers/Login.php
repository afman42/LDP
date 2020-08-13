<?php
defined('BASEPATH') OR exit('No direct script access allowed');
date_default_timezone_set('Asia/Jakarta');
class Login extends CI_Controller {

	public function index()
	{
        redirect(site_url('login/registrasi'));
	}

    public function registrasi()
    {
        $this->load->view('template-home/header');
		$this->load->view('home-login/registrasi');
		// $this->load->view('template-home/footer');
    }

	public function buat_registrasi()
	{
        $query = $this->db->query('SELECT max(idsiswa) as max FROM tbsiswa')->row_array();
        $idsiswa = $query['max'];
        // var_dump($idsiswa);
        $urutan = (int) substr($idsiswa, 3, 3);
        $urutan++;
        $huruf = "SWA";
        $idsiswa = $huruf . sprintf("%03s", $urutan);
        $post = $this->input->post();
        $idprogram = $post['idprogram'];
        $nama = $post['nama'];
        $jeniskelamin = $post['jeniskelamin'];
        $NIK_KTP = $post['NIK_KTP'];
        $NIK_KK = $post['NIK_KK'];
        $tempatlahir = $post['tempatlahir'];
        $tgllahir = $post['tgllahir'];
        $agama = $post['agama'];
        $alamat = $post['alamat'];
        $kewarganegaraan = $post['kewarganegaraan'];
        $nohp = $post['nohp'];
        $kelas = $post['kelas'];

        $email = $post['email'];
        $password = $post['password'];
        $regis_date = date('Y-m-d h:i:s');

        $status = 'menunggu';

        $namaayah = $post['namaayah'];
        $pekerjaanayah = $post['pekerjaanayah'];
        $pendapatanayah = $post['pendapatanayah'];
        $tahunlahirayah = $post['tahunlahirayah'];

        $namaibu = $post['namaibu'];
        $pekerjaanibu = $post['pekerjaanibu'];
        $pendapatanibu = $post['pendapatanibu'];
        $tahunlahiribu = $post['tahunlahiribu'];

        $namawali = $post['namawali'];
        $pekerjaanwali = $post['pekerjaanwali'];
        $pendapatanwali = $post['pendapatanwali'];
        $tahunlahirwali = $post['tahunlahirwali'];

        $post = $this->input->post();
        $data = [
            'idsiswa' => $idsiswa,
            'nama' => $post['nama'],
            'idprogram' => $idprogram,
            'jeniskelamin' => $jeniskelamin,
            'NIK_KTP' => $NIK_KTP,
            'NIK_KK' => $NIK_KK,
            'tempatlahir' => $tempatlahir,
            'tgllahir' => $tgllahir,
            'agama' => $agama,
            'alamat' => $alamat,
            'kewarganegaraan' => $kewarganegaraan,
            'nohp' => $nohp,
            'kelas' => $kelas,
            'email' => $email,
            'password' => $password,
            'regis_date' => $regis_date,
            'status' => $status,
            'namaayah' => $namaayah,
            'pekerjaanayah' => $pekerjaanayah,
            'pendapatanayah' => $pendapatanayah,
            'tahunlahirayah' => $tahunlahirayah,
            'namaibu' => $namaibu,
            'pekerjaanibu' => $pekerjaanibu,
            'pendapatanibu' => $pendapatanibu,
            'tahunlahiribu' => $tahunlahiribu,
            'namawali' => $namawali,
            'pekerjaanwali' => $pekerjaanwali,
            'pendapatanwali' => $pendapatanwali,
            'tahunlahirwali' => $tahunlahirwali,
            'foto' => 'default.png'
        ];
        $this->db->insert('tbsiswa',$data);
        redirect(site_url('login/masuk'));
    }
    
    public function masuk()
    {
        echo "coba";
    }
}
