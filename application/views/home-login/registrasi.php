<main class="form-v10">
	<div class="page-content">
		<div class="form-v10-content">
			<form class="form-detail" action="<?= site_url('login/buat_registrasi');?>" method="post" id="myform">
				<div class="form-left">
					<h2>Formulir Pendaftaran <br>Warga Belajar</h2>
					<div class="form-row">
						<input type="text" name="nama" class="company" id="nama" placeholder="Nama Lengkap" required>
					</div>
					<div class="form-row">
						<select name="jeniskelamin">
							<option class="option" selected="selected" disabled="disabled">Jenis Kelamin</option>
							<option class="option" value="lk">Laki-Laki</option>
							<option class="option" value="pr">Perempuan</option>
						</select>
					</div>
					<div class="form-row">
						<input type="number" name="NIK_KTP" class="NIK KTP" id="NIK KTP" placeholder="NIK KTP" required>
					</div>
					<div class="form-row">
						<input type="number" name="NIK_KK" class="NIK KK" id="NIK KK" placeholder="NIK KK" required>
					</div>
					<div class="form-row">
						<input type="text" name="tempatlahir" id="tempatlahir" placeholder="Tempat Lahir" required>
					</div>
					<div class="form-row">
						<input type="date" name="tgllahir" id="tgllahir" placeholder="Tanggal Lahir" required>
					</div>
					<div class="form-row">
						<select name="agama">
							<option class="option" selected="selected" disabled="disabled">Pilih Agama</option>
							<option class="option" value="Islam">Islam</option>
							<option class="option" value="Protestan">Protestan</option>
							<option class="option" value="Katolik">Katolik</option>
							<option class="option" value="Hindu">Hindu</option>
							<option class="option" value="Budha">Budha</option>
							<option class="option" value="Konghucu">Konghucu</option>
						</select>
					</div>
					<div class="form-row">
						<select name="kewarganegaraan">
							<option class="option" selected="selected" disabled="disabled">Pilih Kewarganegaraan</option>
							<option class="option" value="WNI">Warga Negara Indonesia</option>
							<option class="option" value="WNA">Warga Negara Asing</option>
						</select>
					</div>
					<div class="form-row">
						<input type="number" name="nohp" class="nohp" id="nohp" placeholder="No Telp (Aktif)" required>
					</div>
					<div class="form-row">
						<textarea name="alamat" class="form-control" required placeholder="Masukan Alamat"></textarea>
					</div>
					<div class="form-row">
                        <?php 
						$pakets = $this->db->get('tbprogrampaket')->result_array();
						?>
						<select name="idprogram">
							<option selected="selected" disabled="disabled">Paket Kursus...</option>
							<?php foreach($pakets as $i) { ?>
								<option value="<?php echo $i['idprogram']; ?>"><?php echo $i['namaprogram']; ?></option>
							<?php } ?>
						</select>
						<span class="select-btn">
							<i class="zmdi zmdi-chevron-down"></i>
						</span>
					</div>
					<div class="form-row">
						<select name="kelas">
							<option selected="selected" disabled="disabled">Pilih Kelas</option>
							<option value="Pagi">Pagi</option>
							<option value="Sore">Sore</option>
						</select>
						<span class="select-btn">
							<i class="zmdi zmdi-chevron-down"></i>
						</span>
					</div>
					<br>
					<h2>Daftar Akun <br></h2>
					<div class="form-row">
						<input type="email" name="email" class="Email" id="Email" placeholder="Email" required>
					</div>
					<div class="form-row">
						<input type="password" name="password" class="Password" id="Password" placeholder="Password" required>
					</div>
				</div>
				<div class="form-right">
					<h2>Data Orang Tua</h2>
					<div class="form-row">
						<input type="text" name="namaayah" class="Nama Ayah" id="Nama Ayah" placeholder="Nama Ayah" required>
					</div>
					<div class="form-row">
						<input type="text" name="pekerjaanayah" class="Pekerjaan Ayah" id="Pekerjaan Ayah" placeholder="Pekerjaan Ayah" required>
					</div>
					<div class="form-row">
						<input type="number" name="pendapatanayah" class="Pendapatan Ayah" id="Pendapatan Ayah" placeholder="Pendapatan Ayah" required>
					</div>
					<div class="form-row">
						<input type="number" name="tahunlahirayah" class="TahunLahirAyah" id="TahunLahirAyah" placeholder="Tahun Lahir Ayah" required>
					</div><br><br>
					<div class="form-row">
						<input type="text" name="namaibu" class="NamaIbu" id="NamaIbu" placeholder="Nama Ibu" required>
					</div>
					<div class="form-row">
						<input type="text" name="pekerjaanibu" class="PekerjaanIbu" id="PekerjaanIbu" placeholder="Pekerjaan Ibu" required>
					</div>
					<div class="form-row">
						<input type="number" name="pendapatanibu" class="PendapatanIbu" id="PendapatanIbu" placeholder="Pendapatan Ibu" required>
					</div>
					<div class="form-row">
						<input type="number" name="tahunlahiribu" class="TahunLahirIbu" id="TahunLahirIbu" placeholder="Tahun Lahir Ibu" required>
					</div><br><br>
					<div class="form-row">
						<input type="text" name="namawali" class="NamaWali" id="NamaWali" placeholder="Nama Wali">
					</div>
					<div class="form-row">
						<input type="text" name="pekerjaanwali" class="PekerjaanWali" id="PekerjaanWali" placeholder="Pekerjaan Wali">
					</div>
					<div class="form-row">
						<input type="number" name="pendapatanwali" class="PendapatanWali" id="PendapatanWali" placeholder="Pendapatan Wali">
					</div>
					<div class="form-row">
						<input type="number" name="tahunlahirwali" class="TahunLahirWali" id="TahunLahirWali" placeholder="Tahun Lahir Wali">
					</div>
					<div class="form-row-last" >
						<input type="submit" name="register" class="register btn-block" value="Daftar">
					</div>
				</div>
			</form>
		</div>
	</div>
</div>
</div>
</main>
</html>