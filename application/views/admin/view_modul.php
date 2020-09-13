 <?php 
 $modul = $this->db->query("SELECT * FROM tbmodul");
 ?>
 <table id="example1" class="table table-bordered table-striped hover">
  <thead>
    <tr>
      <th>Nama Program Paket</th>
      <th>Nama File Modul</th>
      <th>Action</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($modul->result_array() as $i) { 
      $idprogram = $i['idprogram'];
      $paket = $this->db->query("SELECT * FROM tbprogrampaket WHERE idprogram='$idprogram'");
      $a = $paket->row_array();
      ?>
      <tr>
        <td><?=$a['namaprogram']; ?></td>
        <td><?=$i['namamodul']; ?></td>
        <td>
          <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#ubahmodal" id="<?php echo $i['idmodul']; ?>">
            <small>
              <i class="fas fa-edit"></i>
              Ubah
            </small>
          </button>
          <a href="<?= site_url('modul/hapus_modul/'.$i['idmodul']); ?>" class="btn btn-danger" onclick="return confirm('Yakin Hapus?')">
            <small>
              <i class="fas fa-trash"></i>
              Hapus
            </small>
          </a>
        </td>
      </tr>
    <?php } ?>
  </tbody>
</table>
<script>
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
    });
  });
</script>