<?php 
$id = $_SESSION['iduser'];
$a = $this->db->query("SELECT * FROM tbuser WHERE iduser='$id'");
$b = $a->row_array(); 
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="icon" type="image/png" href="../dist/img/book.png">
  <title>Data Siswa</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="<?= base_url();?>assets/plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="stylesheet" href="<?= base_url();?>assets/plugins/datatables-bs4/css/dataTables.bootstrap4.css">
  <link rel="stylesheet" href="<?= base_url();?>assets/dist/css/adminlte.min.css">
  <link rel="stylesheet" href="<?= base_url();?>assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<style type="text/css">
@media screen {
  #printSection {
    display: none;
  }
}

@media print {
  body {
    visibility:hidden;
  }
  #printSection, #printSection * {
    visibility:visible;
  }
  #printSection {
    position:absolute;
    top: 0;
    left: 0;
    right: 0;
  }
}
</style>
<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
        </li>
      </ul>
      <?php 
      $query_daftar = $this->db->query("SELECT * FROM tbsiswa WHERE status='menunggu'");
      $i = $query_daftar->num_rows();
      ?>
      <!-- Right navbar links -->
      <ul class="navbar-nav ml-auto">
        <!-- Notifications Dropdown Menu -->
        <li class="nav-item dropdown">
          <a class="nav-link" data-toggle="dropdown" href="#">
            <i class="far fa-bell"></i>
            <span class="badge badge-warning navbar-badge"><?=$i; ?></span>
          </a>
          <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
            <span class="dropdown-item dropdown-header"><?=$i; ?> Pemberitahuan</span>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <i class="fas fa-users mr-2"></i><?=$i; ?> Pendaftaran Baru
            </a>  
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= site_url('loginadmin/logout');?>">
            <i class="fas fa-sign-out-alt"></i>
          </a>
        </li>
      </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <img src="<?= base_url();?>assets/dist/img/<?=$b['foto']; ?>" class="img-circle elevation-2" alt="User Image">
          </div>
          <div class="info">
            <a href="#" class="d-block"><?=$b['nama']; ?></a>
          </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <?php if ($_SESSION['jabatan'] != 'Pengelola') { ?>
              <li class="nav-item">
                <a href="<?= site_url('dashboard_pengelola');?>" class="nav-link">
                  <i class="nav-icon fas fa-tachometer-alt"></i>
                  <p>Dashboard</p>
                </a>
              </li>
            <?php } else { ?>
              <li class="nav-item">
                <a href="<?= site_url('dashboard');?>" class="nav-link">
                  <i class="nav-icon fas fa-tachometer-alt"></i>
                  <p>Dashboard</p>
                </a>
              </li>
            <?php } ?>
            <?php if ($_SESSION['jabatan'] != 'Pengelola') { } else { ?>
              <li class="nav-item">
                <a href="<?= site_url('pengelola');?>" class="nav-link">
                  <i class="nav-icon fas fa-user-tie"></i>
                  <p>Data Pengelola</p>
                </a>
              </li>
            <?php } ?>
            <li class="nav-item">
              <a href="<?= site_url('siswa');?>" class="nav-link active">
                <i class="nav-icon fas fa-users"></i>
                <p>Data Siswa</p>
              </a>
            </li>
            <?php if ($_SESSION['jabatan'] != 'Pengelola') { ?>
              <li class="nav-item">
                <a href="<?= site_url('programpaket');?>" class="nav-link">
                  <i class="nav-icon fas fa-cubes"></i>
                  <p>Data Program Paket</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= site_url('modul');?>" class="nav-link">
                  <i class="nav-icon fas fa-book"></i>
                  <p>Data Modul</p>
                </a>
              </li>
            <?php } else {} ?>
            <?php if ($_SESSION['jabatan'] != 'Pengelola') { } else { ?>
              <li class="nav-item">
                <a href="<?= site_url('laporan');?>" class="nav-link">
                  <i class="nav-icon fas fa-sticky-note"></i>
                  <p>Laporan</p>
                </a>
              </li>
            <?php } ?>
          </ul>
        </nav>
      </div>
      <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0 text-dark">Laporan Siswa</h1>
            </div>
          </div>
        </div>
      </div>
      <!-- /.content-header -->

      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
          <div class="card">
            <div class="row m-2">
              <div class="col-sm-1">
                <a href="#" class="btn btn-success">
                  <small>
                    <i class="fas fa-check"></i>
                    Verifikasi
                  </small>
                </a>
              </div>
              <div class="col-sm-11">
                <p class="text-danger">Verifikasi di laporan berfungsi sebagai reset ulang siswa, misalnya ada kesalahan dari pihak pengelola maka bisa di lakukkan reset ulang pembayaran!</p>
              </div>
            </div>
            <div class="card-body table-responsive">
              <div id="load-siswa"></div>
            </div>
          </div>
        </div>
      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
  </div>
  <!-- ./wrapper -->
  <div class="modal fade" id="modalformulir">
    <div class="modal-dialog modal-xl">
      <div class="modal-content">
        <div class="modal-body">
          <div id="load-formulir"></div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-info" id="print">Print Formulir</button>
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>

  <div class="modal fade" id="modalbayar">
    <div class="modal-dialog modal-lg modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Bukti Pembayaran</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div id="load-pembayaran"></div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>

  <!-- Page Script -->
  <script src="<?= base_url();?>assets/plugins/jquery/jquery.min.js"></script>
  <!-- jQuery UI 1.11.4 -->
  <script src="<?= base_url();?>assets/plugins/jquery-ui/jquery-ui.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="<?= base_url();?>assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?= base_url();?>assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
  <script src="<?= base_url();?>assets/dist/js/adminlte.js"></script>
  <script src="<?= base_url();?>assets/dist/js/demo.js"></script>
  <!-- DataTables -->
  <script src="<?= base_url();?>assets/plugins/datatables/jquery.dataTables.js"></script>
  <script src="<?= base_url();?>assets/plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>
  <script src="<?= base_url();?>assets/plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
  <!-- page script -->

  <script>
    $(document).ready(function() {
      $('#load-siswa').load("<?= site_url('laporan/load_view_siswa_2');?>");
    });
    $(document).ready(function(){
      $('#modalformulir').on('show.bs.modal', function (e) {
        var idsiswa = $(e.relatedTarget).attr('id');
        $.ajax({
          type : 'POST',
          url  : '<?= site_url('siswa/view_formulir');?>',
          data :  'idsiswa='+ idsiswa,
          success : function(data) {
            $('#load-formulir').html(data);
          }
        });
      });
    });
    $(document).ready(function(){
      $('#modalbayar').on('show.bs.modal', function (e) {
        var idsiswa = $(e.relatedTarget).attr('id');
        $.ajax({
          type : 'POST',
          url  : '<?= site_url('siswa/view_pembayaran');?>',
          data :  'idsiswa='+ idsiswa,
          success : function(data) {
            $('#load-pembayaran').html(data);
          }
        });
      });
    });
    document.getElementById("print").onclick = function () {
      printElement(document.getElementById("print-area"));
    }
    function printElement(elem) {
      var domClone = elem.cloneNode(true);
      var $printSection = document.getElementById("printSection");
      if (!$printSection) {
        var $printSection = document.createElement("div");
        $printSection.id = "printSection";
        document.body.appendChild($printSection);
      }
      $printSection.innerHTML = "";
      $printSection.appendChild(domClone);
      window.print();
    }
  </script>
</body>
</html>
