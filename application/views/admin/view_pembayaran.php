<?php 
if ($_POST['idsiswa']) {
	$idsiswa = $_POST['idsiswa'];
	$query = $this->db->query("SELECT * FROM tbsiswa WHERE idsiswa = '$idsiswa'");
	foreach ($query->result_array() as $n) { ?>
		<?php if ($n['upload_bukti'] == '') {?>
			<div class="row">
				<div class="col-12 p-3">
					<img src="<?= base_url();?>assets/dist/img/depression.png" class="mx-auto d-block mb-2 img-circle border shadow shadow-bottom" width="200">
					<h4 class="text-center p-2">Calon siswa dengan nama <strong><?php echo $n['nama']; ?></strong> belum melakukkan pembayaran!</h4>
				</div>
			</div>
		<?php } else { ?>
			<center>
				<img src="<?= base_url();?>assets/dist/bukti/<?php echo $n['upload_bukti']; ?>" class="mx-auto d-block mb-2 border shadow shadow-bottom" width="500">
			</center> 
		<?php } ?>
		<?php } } ?>