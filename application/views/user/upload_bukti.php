<?php 
$id = $_SESSION['login_id'];
$cek = $this->db->query("SELECT * FROM tbsiswa WHERE idsiswa='$id'");
$array_cek = $cek->row_array();
if ($array_cek['status'] == 'menunggu') { } else { redirect(site_url('user/profil')); }?>
<!doctype html>
<html class="no-js" lang="zxx">

<head>
 <meta charset="utf-8">
 <meta http-equiv="x-ua-compatible" content="ie=edge">
 <title>Upload Bukti </title>
 <meta name="description" content="">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="shortcut icon" type="image/x-icon" href="<?= base_url(); ?>assets/img/favicon.ico">

 <!-- CSS here -->
 <link rel="stylesheet" href="<?= base_url(); ?>assets/css/bootstrap.min.css">
 <link rel="stylesheet" href="<?= base_url(); ?>assets/css/owl.carousel.min.css">
 <link rel="stylesheet" href="<?= base_url(); ?>assets/css/slicknav.css">
 <link rel="stylesheet" href="<?= base_url(); ?>assets/css/animate.min.css">
 <link rel="stylesheet" href="<?= base_url(); ?>assets/css/magnific-popup.css">
 <link rel="stylesheet" href="<?= base_url(); ?>assets/css/fontawesome-all.min.css">
 <link rel="stylesheet" href="<?= base_url(); ?>assets/css/themify-icons.css">
 <link rel="stylesheet" href="<?= base_url(); ?>assets/css/slick.css">
 <link rel="stylesheet" href="<?= base_url(); ?>assets/css/nice-select.css">
 <link rel="stylesheet" href="<?= base_url(); ?>assets/css/style.css">
</head>

<body>
 <!-- Preloader Start -->
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
<!-- Preloader Start-->
<div class="header-area">
  <div class="main-header">
    <div class="container-fluid">
      <div class="row align-items-center">
        <!-- Logo -->
        <div class="col-xl-2 col-lg-2 col-md-1">
          <div class="logo">
            <img src="<?= base_url();?>assets/img/logo/logo1.png" alt="">
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
                  <?php if ($_SESSION['login_id'] != '') { 
                        $ids = $this->db->get_where('tbsiswa',['idsiswa' => $_SESSION['login_id']])->row_array();
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
<main>
  <!--? Hero Start -->
  <center>
    <h1>Upload Bukti Bayar</h1>
    <hr>
    <h3>Nomor Rekening Lembaga</h3>
    <h5>Bank BRI : 0089-01-014440-53-1</h5>
    <h5>A.n : LKP Dharma Komputer</h5>
  </center>
  <center>
    <div class="row">
      <div class="col-6">
        <img src="<?= base_url(); ?>assets/img/logo/files.png"><br><br>
        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modalupload">Upload Bukti Sekarang</button>
      </div>
      <div class="col-6">
        <img src="<?= base_url(); ?>assets/img/logo/time.png"><br><br>
        <a href="index.php" class="btn btn-danger">Upload Bukti Nanti</a>
      </div>
    </div>
  </center>
  <br><br><br><br><br>
</main>
<!-- Hero End -->
<!--================Blog Area =================-->
<footer>
  <!--? Footer Start-->
  <div class="footer-area section-bg" data-background="<?= base_url(); ?>assets/img/gallery/footer_bg.jpg">
   <div class="container">
    <div class="footer-top footer-padding">
      <div class="row d-flex justify-content-between">
        <div class="col-xl-3 col-lg-4 col-md-5 col-sm-8">
          <div class="single-footer-caption mb-50">
            <!-- logo -->
            <div class="single-footer-caption mb-50">
              <!-- logo -->
              <div class="footer-logo">
                <img src="<?= base_url(); ?>assets/img/logo/logo_footer.png" alt=""></a>
              </div>
              <div class="footer-tittle">
                <div class="footer-pera">
                  <p class="info1">Informasi Lebih Lanjut.</p>
                </div>
              </div>
              <div class="footer-number">
                <h4><span>0899 </span>8726-788</h4>
                <h4><span>0813 </span>33398-969</h4>
                <p>lkpdharmakomputer@gmail.com</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-8">
          <div class="single-footer-caption mb-50">
            <div class="footer-tittle">
              <h4>Temukan Kami</h4>
              <div class="google-maps">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.3079484138366!2d108.99274231398658!3d0.9164506630717641!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31e37209a0bf61d7%3A0x49df14704d4edfae!2sLKP%20DHARMA%20KOMPUTER%20%26%20PRINT!5e0!3m2!1sid!2sid!4v1592235021554!5m2!1sid!2sid" width="780" height="240" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
<!-- Footer End-->
</footer>
<div class="modal fade" id="modalupload">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Upload Bukti Bayar</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <form method="post" action="<?= site_url('user/upload_bukti_foto');?>" enctype="multipart/form-data">
          <div class="custom-file">
            <input type="file" class="custom-file-input" id="customFile" name="upload_bukti">
            <label class="custom-file-label" for="customFile">Choose file</label>
          </div>
          <br><br>
          <button type="submit" class="btn btn-primary btn-block">Upload</button>
        </form>
      </div>

    </div>
  </div>
</div>
<!-- Scroll Up -->
<div id="back-top" >
 <a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
</div>

<!-- JS here -->
<!-- All JS Custom Plugins Link Here here -->
<script src="<?= base_url(); ?>assets/js/vendor/modernizr-3.5.0.min.js"></script>
<!-- Jquery, Popper, Bootstrap -->
<script src="<?= base_url(); ?>assets/js/vendor/jquery-1.12.4.min.js"></script>
<script src="<?= base_url(); ?>assets/js/popper.min.js"></script>
<script src="<?= base_url(); ?>assets/js/bootstrap.min.js"></script>
<!-- Jquery Mobile Menu -->
<script src="<?= base_url(); ?>assets/js/jquery.slicknav.min.js"></script>

<!-- Jquery Slick , Owl-Carousel Plugins -->
<script src="<?= base_url(); ?>assets/js/owl.carousel.min.js"></script>
<script src="<?= base_url(); ?>assets/js/slick.min.js"></script>

<!-- One Page, Animated-HeadLin -->
<script src="<?= base_url(); ?>assets/js/wow.min.js"></script>
<script src="<?= base_url(); ?>assets/js/animated.headline.js"></script>
<script src="<?= base_url(); ?>assets/js/jquery.magnific-popup.js"></script>
<!-- counter , waypoint -->
<script src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
<script src="<?= base_url(); ?>assets/js/jquery.counterup.min.js"></script>

<!-- Nice-select, sticky -->
<script src="<?= base_url(); ?>assets/js/jquery.nice-select.min.js"></script>
<script src="<?= base_url(); ?>assets/js/jquery.sticky.js"></script>

<!-- contact js -->
<script src="<?= base_url(); ?>assets/js/contact.js"></script>
<script src="<?= base_url(); ?>assets/js/jquery.form.js"></script>
<script src="<?= base_url(); ?>assets/js/jquery.validate.min.js"></script>
<script src="<?= base_url(); ?>assets/js/mail-script.js"></script>
<script src="<?= base_url(); ?>assets/js/jquery.ajaxchimp.min.js"></script>

<!-- Jquery Plugins, main Jquery -->	
<script src="<?= base_url(); ?>assets/js/plugins.js"></script>
<script src="<?= base_url(); ?>assets/js/main.js"></script>

<script>
        // Add the following code if you want the name of the file appear on select
        $(".custom-file-input").on("change", function() {
          var fileName = $(this).val().split("\\").pop();
          $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
        });
</script>

</body>

</html>