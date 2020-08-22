<?php 
if ($_POST['idsiswa']) {
  $idsiswa = $_POST['idsiswa'];
  $query = $this->db->query("SELECT * FROM tbsiswa WHERE idsiswa = '$idsiswa'");
  foreach ($query->result_array() as $n) {
    ?>
    <form method="post" id="ubah-data">
      <center>
        <div class="col-2 text-center">
         <b>Data Siswa</b>
       </div>
     </center>
     <br>
     <input type="hidden" name="idsiswa" class="form-control" value="<?php echo $n['idsiswa']; ?>">
     <div class="row">
      <div class="col-6">
        <input type="email" name="email" class="form-control" value="<?php echo $n['email']; ?>">
      </div>
      <div class="col-6">
        <input type="password" name="password" class="form-control" placeholder="Password">
      </div>
    </div>
    <br>
    <div class="row">
      <div class="col-6">
        <input type="text" name="nama" class="form-control" value="<?php echo $n['nama']; ?>">
      </div>
      <div class="col-6">
        <select name="jeniskelamin" class="form-control">
          <option selected="selected" disabled="disabled">Pilih Jenis Kelamin</option>
          <option value="lk" <?php if ($n['jeniskelamin'] == 'lk') { echo "selected"; } ?>>Laki - Laki</option>
          <option value="pr" <?php if ($n['jeniskelamin'] == 'pr') { echo "selected"; } ?>>Perempuan</option>
        </select>
      </div>
    </div>
    <br>
    <div class="row">
      <div class="col-6">
        <input type="number" name="NIK_KTP" class="form-control" value="<?php echo $n['NIK_KTP']; ?>">
      </div>
      <div class="col-6">
        <input type="number" name="NIK_KK" class="form-control" value="<?php echo $n['NIK_KK']; ?>">
      </div>
    </div>
    <br>
    <div class="row">
      <div class="col-6">
        <input type="text" name="tempatlahir" class="form-control"value="<?php echo $n['tempatlahir']; ?>">
      </div>
      <div class="col-6">
        <input type="date" name="tgllahir" class="form-control" value="<?php echo $n['tgllahir']; ?>">
      </div>
    </div>
    <br>
    <div class="row">
      <div class="col-6">
        <select name="agama" class="form-control">
          <option class="option" selected="selected" disabled="disabled">Pilih Agama</option>
          <option value="Islam" <?php if ($n['agama'] == 'Islam') { echo "selected"; } ?>>Islam</option>
          <option value="Protestan" <?php if ($n['agama'] == 'Protestan') { echo "selected"; } ?>>Protestan</option>
          <option value="Katolik" <?php if ($n['agama'] == 'Katolik') { echo "selected"; } ?>>Katolik</option>
          <option value="Hindu" <?php if ($n['agama'] == 'Hindu') { echo "selected"; } ?>>Hindu</option>
          <option value="Budha" <?php if ($n['agama'] == 'Budha') { echo "selected"; } ?>>Budha</option>
          <option value="Konghucu" <?php if ($n['agama'] == 'Konghucu') { echo "selected"; } ?>>Konghucu</option>
        </select>
      </div>
      <div class="col-6">
        <input type="number" name="nohp" class="form-control" value="<?php echo $n['nohp']; ?>">
      </div>
    </div>
    <br>
    <div class="row">
      <div class="col-6">
        <select name="kewarganegaraan" class="form-control">
          <option class="option" selected="selected" disabled="disabled">Pilih Kewarganegaraan</option>
          <option value="WNI" <?php if ($n['kewarganegaraan'] == 'WNI') { echo "selected"; } ?>>Warga Negara Indonesia</option>
          <option value="WNA" <?php if ($n['kewarganegaraan'] == 'WNA') { echo "selected"; } ?>>Warga Negara Asing</option>
        </select>
      </div>
      <div class="col-6">
        <?php 
        $program = $this->db->query("SELECT * FROM tbprogrampaket");
        ?>
        <select name="idprogram" class="form-control">
          <option selected="selected" disabled="disabled">Pilih Program Paket</option>
          <?php foreach ($program->result_array() as $n) { ?>
            <option value="<?=$x['idprogram']; ?>" <?php if ($n['idprogram'] == $x['idprogram']) { echo "selected"; }?>><?php echo $x['namaprogram']; ?></option>
          <?php } ?>
        </select>
      </div>
    </div>
    <br>
    <div class="row">
      <div class="col-6">
        <select name="kelas" class="form-control">
          <option selected="selected" disabled="disabled">Pilih Kelas</option>
          <option value="Pagi" <?php if ($n['kelas'] == 'Pagi') { echo "selected"; }?>>Pagi</option>
          <option value="Sore" <?php if ($n['kelas'] == 'Sore') { echo "selected"; }?>>Sore</option>
        </select>
      </div>
    </div>
    <br>
    <div>Alamat:</div>
    <textarea class="form-control" rows="3" name="alamat"><?php echo $n['alamat']; ?></textarea>
    <br><br>
    <center>
      <div class="col-2 text-center">
       <b>Data Ayah</b>
     </div>
   </center>
   <br>
   <div class="row">
    <div class="col-6">
      <input type="text" name="namaayah" class="form-control" value="<?php echo $n['namaayah'] ?>">
    </div>
    <div class="col-6">
      <input type="number" name="tahunlahirayah" class="form-control" value="<?php echo $n['tahunlahirayah'] ?>">
    </div>
  </div>
  <br>
  <div class="row">
    <div class="col-6">
      <input type="text" name="pekerjaanayah" class="form-control" value="<?php echo $n['pekerjaanayah'] ?>">
    </div>
    <div class="col-6">
      <input type="number" name="pendapatanayah" class="form-control" value="<?php echo $n['pendapatanayah'] ?>">
    </div>
  </div>
  <br><br>
  <center>
    <div class="col-2 text-center">
     <b>Data Ibu</b>
   </div>
 </center>
 <br>
 <div class="row">
  <div class="col-6">
    <input type="text" name="namaibu" class="form-control" value="<?php echo $n['namaibu'] ?>">
  </div>
  <div class="col-6">
    <input type="number" name="tahunlahiribu" class="form-control" value="<?php echo $n['tahunlahiribu'] ?>">
  </div>
</div>
<br>
<div class="row">
  <div class="col-6">
    <input type="text" name="pekerjaanibu" class="form-control" value="<?php echo $n['pekerjaanibu'] ?>">
  </div>
  <div class="col-6">
    <input type="number" name="pendapatanibu" class="form-control" value="<?php echo $n['pendapatanibu'] ?>">
  </div>
</div>
<br><br>
<center>
  <div class="col-2 text-center">
   <b>Data Wali</b>
 </div>
</center>
<br>
<div class="row">
  <div class="col-6">
    <input type="text" name="namawali" class="form-control" value="<?php echo $n['namawali'] ?>">
  </div>
  <div class="col-6">
    <input type="number" name="tahunlahirwali" class="form-control" value="<?php echo $n['tahunlahirwali'] ?>">
  </div>
</div>
<br>
<div class="row">
  <div class="col-6">
    <input type="text" name="pekerjaanwali" class="form-control" value="<?php echo $n['pekerjaanwali'] ?>">
  </div>
  <div class="col-6">
    <input type="number" name="pendapatanwali" class="form-control" value="<?php echo $n['pendapatanwali'] ?>">
  </div>
</div>
</form>
<?php } } ?>