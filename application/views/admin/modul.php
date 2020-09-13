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
  <title>Data Modul</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="<?= base_url();?>assets/plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="stylesheet" href="<?= base_url();?>assets/plugins/datatables-bs4/css/dataTables.bootstrap4.css">
  <link rel="stylesheet" href="<?= base_url();?>assets/dist/css/adminlte.min.css">
  <link rel="stylesheet" href="<?= base_url();?>assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
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
              <a href="<?= site_url('siswa');?>" class="nav-link">
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
                <a href="<?= site_url('modul');?>" class="nav-link active">
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
              <h1 class="m-0 text-dark">Data Modul</h1>
            </div>
          </div>
        </div>
      </div>
      <!-- /.content-header -->

      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
          <div class="card">
            <div class="card-header">
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#tambahmodal">
                <i class="fas fa-plus"></i> &nbsp;
                Tambah Data
              </button>
            </div>
            <div class="card-body">
              <div id="load-modul"></div>
            </div>
          </div>
        </div>
      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
  </div>
  <!-- ./wrapper -->
  <div class="modal fade" id="tambahmodal">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Tambah Data Modul</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form method="post" id="tambah-modul">
            <select id="idprogram" name="idprogram" class="form-control">
              <?php $paket = $this->db->query("SELECT * FROM tbprogrampaket"); ?>
              <option selected="selected" disabled="disabled">Pilih Program Paket</option>
              <?php foreach ($paket->result_array() as $i) { ?>
                <option value="<?=$i['idprogram'] ?>"><?=$i['namaprogram'] ?></option>
              <?php } ?>
            </select>
            <br>
            <div class="custom-file">
              <input type="file" class="custom-file-input" id="customFile" name="namamodul">
              <label class="custom-file-label" for="customFile">Pilih File Modul</label>
            </div>
          </form>
        </div>
        <div class="modal-footer justify-content-between">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary" id="tambah">Simpan Data</button>
        </div>
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>
  <div class="modal fade" id="ubahmodal">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Ubah Data Modul</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div id="load-edit"></div>
        </div>
        <div class="modal-footer justify-content-between">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary" id="simpan">Simpan Data</button>
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
      $('#load-modul').load("<?= site_url('modul/view_modul');?>");
    });
    $(document).ready(function(){
      $('#ubahmodal').on('show.bs.modal', function (e) {
        var idmodul = $(e.relatedTarget).attr('id');
        $.ajax({
          type : 'POST',
          url  : '<?= site_url('modul/view_edit_modul');?>',
          data :  'idmodul='+ idmodul,
          success : function(data) {
            $('#load-edit').html(data);
          }
        });
      });
    });
    $(document).on('click', '#simpan', function(){
      event.preventDefault();
      var form = $('#ubah-modul')[0];
      var data = new FormData(form);
      $.ajax({
        type: 'post',
        url: "<?= site_url('modul/ubah_modul');?>",
        enctype: 'multipart/form-data',
        processData: false,
        contentType: false,
        cache: false,
        dataType:"json",
        data: data,
        success: function(response) {
          if(response.status === "success") {
            alert('Edit Berhasil!');
            $('#ubahmodal').modal('hide');
            $('#load-modul').load("<?= site_url('modul/view_modul');?>");
            
          } else if(response.status === "error") {
            alert('Edit Gagal!')
            $('#ubahmodal').modal('hide');
            $('#load-modul').load("<?= site_url('modul/view_modul');?>");
          }
        }
      });
    });
    $(document).on('click', '#tambah', function(){
      event.preventDefault();
      var form = $('#tambah-modul')[0];
      var data = new FormData(form);
      $.ajax({
       type: 'post',
       url: "<?= site_url('modul/tambah_modul');?>",
       enctype: 'multipart/form-data',
       processData: false,
       contentType: false,
       cache: false,
       dataType:"json",
       data: data,
       success: function(response) {
        if(response.status === "success") {
          alert('Tambah Berhasil!');
          $('#tambahmodal').modal('hide');
          $('#load-modul').load("<?= site_url('modul/view_modul');?>");
        } else if(response.status === "error") {
          alert('Tambah Gagal!')
          $('#tambahmodal').modal('hide');
          $('#load-modul').load("<?= site_url('modul/view_modul');?>");
        }
      }
    });
    });
    $(document).ready(function () {
      bsCustomFileInput.init();
    });
  </script>
</body>
</html>
