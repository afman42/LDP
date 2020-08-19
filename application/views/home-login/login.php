<!DOCTYPE html>
<html lang="en">
<head>
	<title>Account Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="<?= base_url(); ?>imageslogin/icons/favicon.ico"/>
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url();?>assets/vendorlogin/bootstrap/css/bootstrap.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/fontslogin/font-awesome-4.7.0/css/font-awesome.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/fontslogin/Linearicons-Free-v1.0.0/icon-font.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url();?>assets/vendorlogin/animate/animate.css">
	<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="<?= base_url();?>assets/vendorlogin/css-hamburgers/hamburgers.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url();?>assets/vendorlogin/animsition/css/animsition.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url();?>assets/vendorlogin/select2/select2.min.css">
	<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="<?= base_url();?>assets/vendorlogin/daterangepicker/daterangepicker.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/csslogin/util.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/csslogin/main.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" href="<?= base_url();?>assets/assetslogin/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?= base_url();?>assets/assetslogin/css/owl.carousel.min.css">
	<link rel="stylesheet" href="<?= base_url();?>assets/assetslogin/css/slicknav.css">
	<link rel="stylesheet" href="<?= base_url();?>assets/assetslogin/css/flaticon.css">
	<link rel="stylesheet" href="<?= base_url();?>assets/assetslogin/css/animate.min.css">
	<link rel="stylesheet" href="<?= base_url();?>assets/assetslogin/css/magnific-popup.css">
	<link rel="stylesheet" href="<?= base_url();?>assets/assetslogin/css/fontawesome-all.min.css">
	<link rel="stylesheet" href="<?= base_url();?>assets/assetslogin/css/themify-icons.css">
	<link rel="stylesheet" href="<?= base_url();?>assets/assetslogin/css/slick.css">
	<link rel="stylesheet" href="<?= base_url();?>assets/assetslogin/css/nice-select.css">
	<link rel="stylesheet" href="<?= base_url();?>assets/assetslogin/css/style.css">
</head>
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
                                            <li><a href="index.php">Beranda</a></li>
                                            <li><a href="profillembaga.php">Tentang Kami</a>
                                                <ul class="submenu">
                                                    <li><a href="<?= base_url(); ?>index.php/welcome/profil_lembaga">Profil Lembaga</a></li>
                                                    <li><a href="<?= base_url(); ?>index.php/welcome/program_paket">Program Paket</a></li>
                                                    <li><a href="<?= base_url(); ?>index.php/welcome/struktur">Struktur Organisasi</a></li>
                                                    <li><a href="<?= base_url(); ?>index.php/welcome/visi_dan_misi">Visi Dan Misi </a></li>
                                                </ul>
                                            </li>
                                            <?php 
                                            
                                            // $idsiswa = $_SESSION['login_id'];
                                            // $siswa = mysqli_query($conn,"SELECT * FROM tbsiswa WHERE idsiswa='$idsiswa'");
                                            // $b = mysqli_fetch_array($siswa);
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
	<br>
	<!-- Header End -->
</header>
<body>
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-l-85 p-r-85 p-t-55 p-b-55">
				<form class="login100-form validate-form flex-sb flex-w" method="post" action="<?= site_url('login/masuk_login'); ?>">
					<span class="login100-form-title p-b-32">
						Account Login
					</span>

					<span class="txt1 p-b-11">
						Email
					</span>
					<div class="wrap-input100 validate-input m-b-36" data-validate = "Email is required">
						<input class="input100" type="Email" name="email" >
						<span class="focus-input100"></span>
					</div>
					
					<span class="txt1 p-b-11">
						Password
					</span>
					<div class="wrap-input100 validate-input m-b-12" data-validate = "Password is required">
						<input class="input100" type="password" name="password" >
						<span class="focus-input100"></span>
					</div>
					<br>
					<br>
					
					
					<br>
					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Login
						</button>
					</div>

				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
	<!--===============================================================================================-->
	<!-- <script src="vendor/jquery/jquery-3.2.1.min.js"></script> -->
	<!--===============================================================================================-->
	<!-- <script src="vendor/animsition/js/animsition.min.js"></script> -->
	<!--===============================================================================================-->
	<!-- <script src="vendor/bootstrap/js/popper.js"></script> -->
	<!-- <script src="vendor/bootstrap/js/bootstrap.min.js"></script> -->
	<!--===============================================================================================-->
	<!-- <script src="vendor/select2/select2.min.js"></script> -->
	<!--===============================================================================================-->
	<!-- <script src="vendor/daterangepicker/moment.min.js"></script> -->
	<!-- <script src="vendor/daterangepicker/daterangepicker.js"></script> -->
	<!-- =============================================================================================== -->
	<!-- <script src="vendor/countdowntime/countdowntime.js"></script> -->
	<!--===============================================================================================-->
	<!-- <script src="js/main.js"></script> -->

</body>
</html>