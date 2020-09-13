<?php 
$paket = $this->db->query("SELECT * FROM tbprogrampaket");
?>
<table id="example1" class="table table-bordered table-striped">
  <thead>
    <tr>
      <th>Nama Program Paket</th>
      <th>Harga</th>
      <th>Action</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($paket->result_array() as $i) { ?>
      <tr>
        <td><?=$i['namaprogram']; ?></td>
        <td>Rp. <?=number_format($i['harga']); ?></td>
        <td>
          <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#ubahmodal" id="<?php echo $i['idprogram']; ?>">
            <small>
              <i class="fas fa-edit"></i>
              Ubah
            </small>
          </button>
          <a href="<?= site_url('programpaket/hapus_paket/'.$i['idprogram']); ?>" class="btn btn-danger" onclick="return confirm('Yakin Hapus?')">
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