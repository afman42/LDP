 <?php 
 if ($_POST['idprogram']) {
  $idprogram = $_POST['idprogram'];
  $query = $this->db->query("SELECT * FROM tbprogrampaket WHERE idprogram = '$idprogram'");
  $n = $query->row_array();
    ?>
    <form method="post" id="ubah-paket">
      <input type="hidden" id="idprogram" name="idprogram" value="<?php echo $n['idprogram']; ?>">
      <input type="text" id="namaprogram" name="namaprogram" class="form-control" value="<?php echo $n['namaprogram']; ?>">
      <br>
      <input type="number" id="harga" name="harga" class="form-control" value="<?php echo $n['harga']; ?>">
    </form>
    <?php } ?>