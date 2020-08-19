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
}