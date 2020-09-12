<?php
 if ($_POST['iduser']) {
  $iduser = $_POST['iduser'];
  $query = $this->db->query("SELECT * FROM tbuser WHERE iduser = '$iduser'");
  $n = $query->row_array();
    ?>
    <form method="post" id="ubah-pengelola">
      <input type="hidden" name="iduser" id="iduser" value="<?=$n['iduser']; ?>">
      <input type="text" id="nama" name="nama" class="form-control" placeholder="Nama Lengkap" value="<?=$n['nama']; ?>">
      <br>
      <div class="row">
        <div class="col-6">
          <input type="email" id="email" name="email" class="form-control" placeholder="Email" value="<?=$n['email']; ?>">
        </div>
        <div class="col-6">
          <input type="password" id="password" name="password" class="form-control" placeholder="Password">
        </div>
      </div>
      <br>
      <div class="row">
        <div class="col-6">
          <select id="jabatan" name="jabatan" class="form-control">
            <option selected="selected" disabled="disabled">Pilih Jabatan</option>
            <option value="Pengelola" <?php if($n['jabatan']=='Pengelola'){echo "selected";} ?>>Pengelola</option>
            <option value="Admin" <?php if($n['jabatan']=='Admin'){echo "selected";} ?>>Admin</option>
          </select>
        </div>
      </div>
    </form>
    <?php } ?>