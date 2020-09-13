 <?php 
 if ($_POST['idmodul']) {
  $idmodul = $_POST['idmodul'];
  $query = $this->db->query("SELECT * FROM tbmodul WHERE idmodul = '$idmodul'");
  foreach ($query->result_array() as $n) {
    ?>
    <form method="post" id="ubah-modul">
      <input type="hidden" name="idmodul" value="<?php echo $n['idmodul']; ?>">
      <select id="idprogram" name="idprogram" class="form-control">
        <?php $paket = $this->db->query("SELECT * FROM tbprogrampaket"); ?>
        <?php foreach ($paket->result_array() as $i) { ?>
          <option value="<?=$i['idprogram'] ?>" <?php if ($i['idprogram'] == $n['idprogram']) { echo "selected"; } ?>><?=$i['namaprogram'] ?></option>
        <?php } ?>
      </select>
      <br>
      <div class="custom-file">
        <input type="file" class="custom-file-input" id="customFile" name="namamodul">
        <label class="custom-file-label" for="customFile">Pilih File Modul</label>
      </div>
    </form>
    <?php } } ?>