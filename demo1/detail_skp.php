<?php include '../konek.php'; ?>
<link href="css/sweetalert.css" rel="stylesheet" type="text/css">
<script src="js/jquery-2.1.3.min.js"></script>
<script src="js/sweetalert.min.js"></script>
<?php
if (isset($_GET['id_request_skp'])) {
	$id_request_skp = $_GET['id_request_skp'];
	$sql = "SELECT * FROM data_request_skp natural join data_user WHERE id_request_skp='$id_request_skp'";
	$query = mysqli_query($konek, $sql);
	$data = mysqli_fetch_array($query, MYSQLI_BOTH);
	$nik = $data['nik'];
	$nama = $data['nama'];
	$agama = $data['agama'];
	$nama_almarhum = $data['nama_almarhum'];
	$nik_a = $data['nik_a'];
	$jenis_kelamin = $data['jenis_kelamin'];
	$tempat_lahir_a = $data['tempat_lahir_a'];
	$tanggal_lahir_a = $data['tanggal_lahir_a'];
	$agama_a = $data['agama_a'];
	$anak_ke = $data['anak_ke'];
	$nama_ayah = $data['nama_ayah'];
	$nama_ibu = $data['nama_ibu'];
	$pekerjaan_a = $data['pekerjaan_a'];
	$kewarganegaraan = $data['kewarganegaraan'];
	$alamat_a = $data['alamat_a'];
	$tanggal_kematian = $data['tanggal_kematian'];
	$waktu_kematian = $data['waktu_kematian'];
	$tempat_kematian = $data['tempat_kematian'];
	$penyebab_kematian = $data['penyebab_kematian'];
	$tempat_pemakaman = $data['tempat_pemakaman'];
	$tanggal_pemakaman = $data['tanggal_pemakaman'];
	$waktu_pemakaman = $data['waktu_pemakaman'];
	$kk = $data['scan_kk'];

}
?>
<div class="page-inner">
	<form action="" method="POST" enctype="multipart/form-data">
		<div class="row">
			<div class="col-md-7">
				<div class="card">
					<div class="card-header">
						<div class="form-group">
							<label>Keterangan</label>
							<input type="text" name="keterangan" class="form-control" autofocus><br>
							<button type="submit" name="ubah" class="btn btn-info btn-border btn-round btn-sm">
								<span class="btn-label">
									<i class="fas fa-edit"></i>
								</span>
								Ubah
							</button>
							<a href="?halaman=sudah_acc_skp" class="btn btn-info btn-border btn-round btn-sm">
								Batal
							</a>
						</div>
					</div>
					<div class="card-body">
						<div class="row">
							<div class="col-md-6 col-lg-6">
								<div class="form-group">
									<label>NIK</label>
									<input type="text" class="form-control" value="<?= $nik . ' - ' . $nama; ?>"
										readonly>
								</div>
								<div class="form-group">
									<input type="hidden" name="nik" class="form-control" value="<?= $nik; ?>" readonly>
								</div>
								<div class="form-group">
									<label>Nama Almarhum:</label>
									<input type="text" name="nama_almarhum" class="form-control"
										value="<?= $nama_almarhum; ?>" required>
								</div>

								<div class="form-group">
									<label>NIK:</label>
									<input type="number" name="nik_a" class="form-control" value="<?= $nik_a; ?>"
										required>
								</div>

								<div class="form-group">
									<label>Jenis Kelamin:</label>
									<select name="jenis_kelamin" id="" class="form-control"
										value="<?= $jenis_kelamin; ?>">
										<option value="Laki-Laki">Laki-Laki</option>
										<option value="Perempuan">Perempuan</option>
									</select>
								</div>

								<div class="form-group">
									<label>Tempat Lahir:</label>
									<input type="text" name="tempat_lahir_a" class="form-control"
										value="<?= $tempat_lahir_a; ?>" required>
								</div>

								<div class="form-group">
									<label>Tanggal Lahir:</label>
									<input type="date" name="tanggal_lahir_a" class="form-control"
										value="<?= $tanggal_lahir_a; ?>" required>
								</div>

								<div class="form-group">
									<label>Agama</label>
									<select name="agama_a" class="form-control" value="<?= $agama_a; ?>">
										<option value="">Pilih Agama Anda</option>
										<option <?php if ($agama == 'Islam') {
											echo "selected";
										} ?> value='Islam'>Islam
										</option>
										<option <?php if ($agama == 'Katolik') {
											echo "selected";
										} ?> value='Kristen'>
											Katolik
										</option>
										<option <?php if ($agama == 'Kristen') {
											echo "selected";
										} ?> value='Kristen'>
											Kristen
										</option>
										<option <?php if ($agama == 'Hindu') {
											echo "selected";
										} ?> value='Hindu'>Hindu
										</option>
										<option <?php if ($agama == 'Budha') {
											echo "selected";
										} ?> value='Budha'>Budha
										</option>
									</select>
								</div>

								<div class="form-group">
									<label>Anak Ke:</label>
									<input type="number" name="anak_ke" class="form-control" value="<?= $anak_ke; ?>">
								</div>

								<div class="form-group">
									<label>Nama Ayah:</label>
									<input type="text" name="nama_ayah" class="form-control" value="<?= $nama_ayah; ?>">
								</div>

								<div class="form-group">
									<label>Nama Ibu:</label>
									<input type="text" name="nama_ibu" class="form-control" value="<?= $nama_ibu; ?>">
								</div>


							</div>
							<div class="col-md-6 col-lg-6">
								<div class="form-group">
									<label>Pekerjaan:</label>
									<input type="text" name="pekerjaan_a" class="form-control"
										value="<?= $pekerjaan_a; ?>">
								</div>

								<div class="form-group">
									<label>Kewarganegaraan:</label>
									<input type="text" name="kewarganegaraan" class="form-control"
										value="<?= $kewarganegaraan; ?>" required>
								</div>

								<div class="form-group">
									<label>Alamat:</label>
									<input type="text" name="alamat_a" class="form-control" value="<?= $alamat_a; ?>">
								</div>

								<div class="form-group">
									<label>Tanggal Kematian:</label>
									<input type="date" name="tanggal_kematian" class="form-control"
										value="<?= $tanggal_kematian; ?>" required>
								</div>

								<div class="form-group">
									<label>Waktu Kematian:</label>
									<input type="time" name="waktu_kematian" class="form-control"
										value="<?= $waktu_kematian; ?>" required>
								</div>

								<div class="form-group">
									<label>Tempat Kematian:</label>
									<input type="text" name="tempat_kematian" class="form-control"
										value="<?= $tempat_kematian; ?>" required>
								</div>

								<div class="form-group">
									<label>Penyebab Kematian:</label>
									<input type="text" name="penyebab_kematian" class="form-control"
										value="<?= $penyebab_kematian; ?>" required>
								</div>

								<div class="form-group">
									<label>Tempat Pemakaman:</label>
									<input type="text" name="tempat_pemakaman" class="form-control"
										value="<?= $tempat_pemakaman; ?>" required>
								</div>

								<div class="form-group">
									<label>Tanggal Pemakaman:</label>
									<input type="date" name="tanggal_pemakaman" class="form-control"
										value="<?= $tanggal_pemakaman; ?>" required>
								</div>

								<div class="form-group">
									<label>Waktu Pemakaman:</label>
									<input type="time" name="waktu_pemakaman" class="form-control"
										value="<?= $waktu_pemakaman; ?>" required>
								</div>
								<div class="form-group">
									<label>Scan KK</label><br>
									<img src="../dataFoto/scan_kk/<?= $kk; ?>" width="200" height="100" alt="">
								</div>
								<div class="form-group">
									<input type="file" name="kk" class="form-control" size="37" required>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-5">
				<div class="card">
					<div class="card-header">
						<h4 class="card-title">KK</h4>
					</div>
					<div class="card-body">
						<div class="row justify-content-md-center">
							<img src="../dataFoto/scan_kk/<?php echo $kk; ?>" width="300" height="300" alt="">
						</div>
					</div>
				</div>
			</div>
		</div>
	</form>
</div>

<?php
if (isset($_POST['ubah'])) {
	$nik = $_POST['nik'];
	$nama_almarhum = $_POST['nama_almarhum'];
	$nik_a = $_POST['nik_a'];
	$jenis_kelamin = $_POST['jenis_kelamin'];
	$tempat_lahir_a = $_POST['tempat_lahir_a'];
	$tanggal_lahir_a = $_POST['tanggal_lahir_a'];
	$agama_a = $_POST['agama_a'];
	$anak_ke = $_POST['anak_ke'];
	$nama_ayah = $_POST['nama_ayah'];
	$nama_ibu = $_POST['nama_ibu'];
	$pekerjaan_a = $_POST['pekerjaan_a'];
	$kewarganegaraan = $_POST['kewarganegaraan'];
	$alamat_a = $_POST['alamat_a'];
	$tanggal_kematian = $_POST['tanggal_kematian'];
	$waktu_kematian = $_POST['waktu_kematian'];
	$tempat_kematian = $_POST['tempat_kematian'];
	$penyebab_kematian = $_POST['penyebab_kematian'];
	$tempat_pemakaman = $_POST['tempat_pemakaman'];
	$tanggal_pemakaman = $_POST['tanggal_pemakaman'];
	$waktu_pemakaman = $_POST['waktu_pemakaman'];
	$nama_kk = isset($_FILES['kk']);
	$keterangan = $_POST['keterangan'];
	$ubah = "UPDATE data_request_skp SET
		nik = '$nik',
    nama_almarhum = '$nama_almarhum',
    nik_a = '$nik_a',
    jenis_kelamin = '$jenis_kelamin',
    tempat_lahir_a = '$tempat_lahir_a',
    tanggal_lahir_a = '$tanggal_lahir_a',
    agama_a = '$agama_a',
    anak_ke = '$anak_ke',
    nama_ayah = '$nama_ayah',
    nama_ibu = '$nama_ibu',
    pekerjaan_a = '$pekerjaan_a',
    kewarganegaraan = '$kewarganegaraan',
    alamat_a = '$alamat_a',
    tanggal_kematian = '$tanggal_kematian',
    waktu_kematian = '$waktu_kematian',
    tempat_kematian = '$tempat_kematian',
    penyebab_kematian = '$penyebab_kematian',
    tempat_pemakaman = '$tempat_pemakaman',
    tanggal_pemakaman = '$tanggal_pemakaman',
    waktu_pemakaman = '$waktu_pemakaman'";
	$query = mysqli_query($konek, $ubah);

	if ($query == 1) {
		$keterangan = $_POST['keterangan'];
		$ubah = "UPDATE data_request_skp SET
		keterangan='$keterangan' WHERE id_request_skp='$id_request_skp'";
		$quey = mysqli_query($konek, $ubah);
		if ($quey == 1) {
			echo "<script language='javascript'>swal('Selamat...', 'Ubah Berhasil', 'success');</script>";
			echo '<meta http-equiv="refresh" content="3; url=?halaman=sudah_acc_skp">';

		}
	} else {
		echo "<script language='javascript'>swal('Gagal...', 'Ubah Gagal', 'error');</script>";
		echo '<meta http-equiv="refresh" content="3; url=?halaman=detail_skp">';
	}
}
?>