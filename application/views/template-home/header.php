<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>LKP Dharma Komputer </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php if ($this->uri->segment(2) == 'registrasi') {?>
    <link rel="stylesheet" type="text/css1" href="<?php echo base_url();?>/assets/css1/montserrat-font.css">
	<link rel="stylesheet" type="text/css1" href="<?php echo base_url();?>/assets/fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">
	<!-- Main Style Css -->
	<link rel="stylesheet" href="<?php echo base_url();?>/assets/css1/style.css"/>
	<link rel="stylesheet" href="<?php echo base_url();?>/assets/assetsform/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo base_url();?>/assets/assetsform/css/owl.carousel.min.css">
	<link rel="stylesheet" href="<?php echo base_url();?>/assets/assetsform/css/slicknav.css">
	<link rel="stylesheet" href="<?php echo base_url();?>/assets/assetsform/css/flaticon.css">
	<link rel="stylesheet" href="<?php echo base_url();?>/assets/assetsform/css/animate.min.css">
	<link rel="stylesheet" href="<?php echo base_url();?>/assets/assetsform/css/magnific-popup.css">
	<link rel="stylesheet" href="<?php echo base_url();?>/assets/assetsform/css/fontawesome-all.min.css">
	<link rel="stylesheet" href="<?php echo base_url();?>/assets/assetsform/css/themify-icons.css">
	<link rel="stylesheet" href="<?php echo base_url();?>/assets/assetsform/css/slick.css">
	<link rel="stylesheet" href="<?php echo base_url();?>/assets/assetsform/css/nice-select.css">
	<link rel="stylesheet" href="<?php echo base_url();?>/assets/assetsform/css/style.css">
    <?php } else { ?>
    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url();?>/assets/img/favicon.ico">
    <!-- CSS here -->
    <link rel="stylesheet" href="<?php echo base_url();?>/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>/assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>/assets/css/slicknav.css">
    <link rel="stylesheet" href="<?php echo base_url();?>/assets/css/flaticon.css">
    <link rel="stylesheet" href="<?php echo base_url();?>/assets/css/animate.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>/assets/css/magnific-popup.css">
    <link rel="stylesheet" href="<?php echo base_url();?>/assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>/assets/css/themify-icons.css">
    <link rel="stylesheet" href="<?php echo base_url();?>/assets/css/slick.css">
    <link rel="stylesheet" href="<?php echo base_url();?>/assets/css/nice-select.css">
    <link rel="stylesheet" href="<?php echo base_url();?>/assets/css/style.css">
    <?php } ?>
</head>
<body class="body-bg">
    <!--? Preloader Start -->
    <?php if ($this->uri->segment(2) != 'registrasi') {?>
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class=" ">
                    <img src=" " alt="">
                </div>
            </div>
        </div>
    </div>
    <?php } ?>
    <header>
        <!--? Header Start -->
        <div class="header-area">
            <div class="main-header  header-sticky">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <!-- Logo -->
                        <div class="col-xl-2 col-lg-2 col-md-1">
                            <div class="logo">
                                <img src="<?= base_url(); ?>assets/img/logo/logo1.png" alt="">
                            </div>
                        </div>
                        <div class="col-xl-10 col-lg-10 col-md-10">
                            <div class="menu-main d-flex align-items-center justify-content-end">
                                <!-- Main-menu -->
                                <div class="main-menu f-right d-none d-lg-block">
                                    <nav> 
                                        <ul id="navigation">
                                            <li><a href="<?= site_url('welcome');?>">Beranda</a></li>
                                            <li><a href="<?= site_url('welcome/profil_lembaga') ;?>">Tentang Kami</a>
                                                <ul class="submenu">
                                                    <li><a href="<?= base_url(); ?>index.php/welcome/profil_lembaga">Profil Lembaga</a></li>
                                                    <li><a href="<?= base_url(); ?>index.php/welcome/program_paket">Program Paket</a></li>
                                                    <li><a href="<?= base_url(); ?>index.php/welcome/struktur">Struktur Organisasi</a></li>
                                                    <li><a href="<?= base_url(); ?>index.php/welcome/visi_dan_misi">Visi Dan Misi </a></li>
                                                </ul>
                                            </li>
                                            <?php
                                            if (isset($_SESSION['login_id']) && $_SESSION['login_id'] != '') {
                                                $ids = $this->db->get_where('tbsiswa',['id_siswa' => $_SESSION['login_id']])->row_array();
                                            ?>
                                                <li><a href="<?= base_url('index.php/user/profil'); ?>"><?=$ids['nama']; ?></a></li>
                                            <?php } else { ?>
                                                <li><a>Daftar/Masuk</a>
                                                  <ul class="submenu">
                                                    <li><a href="<?= base_url('index.php/login/registrasi'); ?>">Daftar</a></li>
                                                    <li><a href="<?= base_url('index.php/login/masuk'); ?>">Masuk</a></li>
                                                </ul>
                                            </li>
                                        <?php } ?>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>   
                    <!-- Mobile Menu -->
                    <div class="col-12">
                        <div class="mobile_menu d-block d-lg-none"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <!-- Header End -->
</header>