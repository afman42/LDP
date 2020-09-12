<?php 
if ($_POST['idsiswa']) {
  $idsiswa = $_POST['idsiswa'];
  $query = $this->db->query("SELECT * FROM tbsiswa WHERE idsiswa = '$idsiswa'");
  foreach ($query->result_array() as $n) { ?>
    <div id="print-area">
      <h5 class="text-center mb-0">Lembaga Kursus dan Pelatihan</h5>
      <h1 class="text-center mb-0">Dharma Komputer</h1>
      <h5 class="text-center">
        <small>
          No Izin Operasional : 421.9/252/PNFI-C/2016 (NPSN : K5667215)
        </small>
      </h5>
      <div class="text-center">
        <small>
          Jalan Uray Dahlan .M. Suka Kel. Sekip Lama Singkawang Tengah, 79113<br>
          Email : lkpdharmakomputer@gmail.com<br>
          Website : lkpdharmakomputer.business.site<br>
          Telp / SMS / WhatsApp : 0899-8726-788
        </small>
      </div>
      <hr>

      <h2 class="text-center">Formulir Pendaftaran Warga Belajar</h2>
      <br>
      <div class="row">
        <div class="col-1 text-center">1</div>
        <div class="col-5">Nama Lengkap</div>
        <div class="col-6"><?php echo $n['nama']; ?>

      </div>
    </div>

    <div class="row">
      <div class="col-1 text-center">2</div>
      <div class="col-5">Jenis Kelamin</div>
      <div class="col-6"><?php echo $n['jeniskelamin']; ?>

    </div>
  </div>

  <div class="row">
    <div class="col-1 text-center">3</div>
    <div class="col-5">NIK KTP</div>
    <div class="col-6"><?php echo $n['NIK_KTP']; ?>

  </div>
</div>

<div class="row">
  <div class="col-1 text-center">4</div>
  <div class="col-5">NIK KK</div>
  <div class="col-6"><?php echo $n['NIK_KK']; ?>

</div>
</div>

<div class="row">
  <div class="col-1 text-center">5</div>
  <div class="col-5">Tempat Lahir</div>
  <div class="col-6"><?php echo $n['tempatlahir']; ?>

</div>
</div>

<div class="row">
  <div class="col-1 text-center">6</div>
  <div class="col-5">Tanggal Lahir</div>
  <div class="col-6"><?php echo $n['tgllahir']; ?>

</div>
</div>

<div class="row">
  <div class="col-1 text-center">7</div>
  <div class="col-5">Agama</div>
  <div class="col-6"><?php echo $n['agama']; ?>

</div>
</div>

<div class="row">
  <div class="col-1 text-center">8</div>
  <div class="col-5">Alamat</div>
  <div class="col-6"><?php echo $n['alamat']; ?>

</div>
</div>

<div class="row">
  <div class="col-1 text-center">9</div>
  <div class="col-5">Kewarganegaraan</div>
  <div class="col-6"><?php echo $n['kewarganegaraan']; ?>

</div>
</div>

<div class="row">
  <div class="col-1 text-center">10</div>
  <div class="col-5">No Handphone</div>
  <div class="col-6"><?php echo $n['nohp']; ?>

</div>
</div>
<?php $idprogram = $n['idprogram']; ?>
<?php $paket = $this->db->query("SELECT * FROM tbprogrampaket WHERE idprogram='$idprogram'"); $a = $paket->row_array(); ?>
<div class="row">
  <div class="col-1 text-center">11</div>
  <div class="col-5">Paket Kursus yang Diambil</div>
  <div class="col-6"><?php echo $a['namaprogram']; ?>

</div>
</div>
<hr>
<h2 class="text-center">Data Orang Tua</h2>
<br>
<div class="row">
  <div class="col-1 text-center">1</div>
  <div class="col-5">Nama Ayah</div>
  <div class="col-6"><?php echo $n['namaayah']; ?></div>
</div>
<div class="row">
  <div class="col-1 text-center">2</div>
  <div class="col-5">Pekerjaan Ayah</div>
  <div class="col-6"><?php echo $n['pekerjaanayah']; ?></div>
</div>
<div class="row">
  <div class="col-1 text-center">3</div>
  <div class="col-5">Pendapatan Ayah</div>
  <div class="col-6">Rp. <?php echo number_format($n['pendapatanayah']); ?></div>
</div>
<div class="row">
  <div class="col-1 text-center">4</div>
  <div class="col-5">Tahun Lahir Ayah</div>
  <div class="col-6"><?php echo $n['tahunlahirayah']; ?></div>
</div>
<br><br>
<div class="row">
  <div class="col-1 text-center">1</div>
  <div class="col-5">Nama Ibu</div>
  <div class="col-6"><?php echo $n['namaibu']; ?></div>
</div>
<div class="row">
  <div class="col-1 text-center">2</div>
  <div class="col-5">Pekerjaan Ibu</div>
  <div class="col-6"><?php echo $n['pekerjaanibu']; ?></div>
</div>
<div class="row">
  <div class="col-1 text-center">3</div>
  <div class="col-5">Pendapatan Ibu</div>
  <div class="col-6">Rp. <?php echo number_format($n['pendapatanibu']); ?></div>
</div>
<div class="row">
  <div class="col-1 text-center">4</div>
  <div class="col-5">Tahun Lahir Ibu</div>
  <div class="col-6"><?php echo $n['tahunlahiribu']; ?></div>
</div>
<br><br>
<div class="row">
  <div class="col-1 text-center">1</div>
  <div class="col-5">Nama Wali</div>
  <div class="col-6"><?php echo $n['namawali']; ?></div>
</div>
<div class="row">
  <div class="col-1 text-center">2</div>
  <div class="col-5">Pekerjaan Wali</div>
  <div class="col-6"><?php echo $n['pekerjaanwali']; ?></div>
</div>
<div class="row">
  <div class="col-1 text-center">3</div>
  <div class="col-5">Pendapatan Wali</div>
  <div class="col-6"><?php echo $n['pendapatanwali']; ?></div>
</div>
<div class="row">
  <div class="col-1 text-center">4</div>
  <div class="col-5">Tahun Lahir Wali</div>
  <div class="col-6"><?php echo $n['tahunlahirwali']; ?></div>
</div>
<br>
<div class="row">
  <div class="col-3"></div>
  <div class="col-3"></div>
  <div class="col-3"></div>
  <div class="col-3 text-center">Singkawang, 88 September 2020</div>
</div>
<div class="row">
  <div class="col-3"></div>
  <div class="col-3"></div>
  <div class="col-3"></div>
  <div class="col-3 text-center">Pimpinan Lembaga</div>
</div>
<br><br><br><br>
<div class="row">
  <div class="col-3"></div>
  <div class="col-3"></div>
  <div class="col-3"></div>
  <div class="col-3 text-center">
    <b>Dharma Setiawan, S.Kom</b>
  </div>
</div>
</div>
<?php } } ?>