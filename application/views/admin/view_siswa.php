<?php 
$no = 1;
$siswa = $this->db->query("SELECT * FROM tbsiswa ORDER BY nama ASC");
?>
<table id="example1" class="table table-bordered table-striped">
  <thead class="text-center">
    <tr >
      <th>#</th>
      <th>Nama</th>
      <th>Email</th>
      <th>Kelas</th>
      <th>Formulir</th>
      <th>Pembayaran</th>
      <th>Status Pembayaran</th>
      <th>Action</th>
    </tr>
  </thead>
  <tbody align="center">
    <?php foreach ($siswa->result_array() as $i) { ?>
      <tr>
        <td><?=$no++; ?></td>
        <td><?=$i['nama']; ?></td>
        <td><?=$i['email']; ?></td>
        <td><?=$i['kelas']; ?></td>
        <td>
          <a href="" data-toggle="modal" data-target="#modalformulir" id="<?php echo $i['idsiswa'] ?>">Lihat Formulir</a>
        </td>
        <td>
          <a href="" data-toggle="modal" data-target="#modalbayar" id="<?php echo $i['idsiswa'] ?>">Lihat Bukti Bayar</a>
        </td>
        <td style="text-transform: capitalize;">
          <?php if ($i['status'] != 'membayar') { ?>
            <span class="badge badge-danger">Belum Lunas</span>
          <?php } else { ?>
            <span class="badge badge-success">Lunas</span>
          <?php } ?>
        </td>
        <td>
          <?php if ($i['status'] != 'membayar') { ?>
            <a href="<?= site_url('siswa/konfirmasi_siswa/'.$i['idsiswa']);?> " class="btn btn-success" onclick="return confirm('Yakin konfirmasi pembayaran ini?')">
              <small>
                <i class="fas fa-check"></i>
                Verifikasi
              </small>
            </a>
          <?php } else { } ?>
          <a href="<?= site_url('siswa/hapus_siswa/'.$i['idsiswa']);?>" class="btn btn-danger" onclick="return confirm('Yakin Hapus?')">
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