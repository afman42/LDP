<?php
$user = $this->db->query("SELECT * FROM tbuser"); ?>
<table id="example1" class="table table-bordered table-striped table-hover">
  <thead>
    <tr>
      <th>Nama</th>
      <th>Email</th>
      <th>Jabatan</th>
      <th>Foto</th>
      <th>Action</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($user->result_array() as $i) { ?>
      <tr>
        <td><?=$i['nama']; ?></td>
        <td><?=$i['email']; ?></td>
        <td><?=$i['jabatan']; ?></td>
        <td><img src="<?= base_url();?>assets/dist/img/<?=$i['foto']; ?>" class="rounded-circle shadow d-block mx-auto" width="40"></td>
        <td>
          <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#ubahmodal" id="<?=$i['iduser']; ?>">
            <small>
              <i class="fas fa-edit"></i>
              Ubah
            </small>
          </button>
          <a href="<?= site_url('pengelola/hapus_pengelola/'.$i['iduser']); ?>" class="btn btn-danger" onclick="return confirm('Yakin Hapus?')">
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