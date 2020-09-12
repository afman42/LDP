<?php 
if ($_POST['idsiswa']) {
  $idsiswa = $_POST['idsiswa'];
  $query = $this->db->query($conn,"SELECT * FROM tbsiswa WHERE idsiswa = '$idsiswa'")->row();
    ?>
    <img src="<?= base_url();?>/assets/admin/dist/bukti/<?=$n->upload_bukti; ?>" width="800" class="img-thumbnail mx-auto d-block">
    <?php } ?>