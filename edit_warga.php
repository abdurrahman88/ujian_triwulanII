<!DOCTYPE html>
<html>
<head>
	<title>Tambah santri</title>
</head>
<body>
<form action="proses/warga_proses_edit.php" method="post">
	<h3>Edit Warga</h3>
	<?php
	include 'proses/koneksi.php';
            $id = $_GET['ID'];
            $sql = mysqli_query($connect, "SELECT * FROM warga WHERE id = $id");
            $row = mysqli_fetch_array($sql);
	?>
	<table>
		<tr>
			<td><label>Nama</label></td>
			<td>: <input type="text" name="nama" value="<?php echo $row['nama']; ?>"></td>
		</tr>
		<tr>
			<td><label>Nik</label></td>
			<td>: <input type="text" name="nama" value="<?= $row['nik']; ?>"></td>
		</tr>
		<tr>
			<td><label>kk</label></td>
			<td>: <input type="text" name="nama" value="<?= $row['kk']; ?>"></td>
		</tr>
		<tr>
			<td><label>Tempat lahir</label></td>
			<td>: <input type="text" name="tempat_lahir" value="<?= $row['tempat_lahir']; ?>"></td>
		</tr>
		<tr>
			<td><label>Tanggal lahir</label></td>
			<td>: <input type="text" name="tanggal_lahir" value="<?= $row['tanggal_lahir']; ?>"></td>
		</tr>
		<tr>
			<td><label>Alamat</label></td>
			<td>: <input type="text" name="alamat" value="<?= $row['alamat']; ?>"></td>
		</tr>
		<tr>
			<td><label>Jenis kelamin</label></td>
			<td>: 
				<input type="radio" name="jenis_kelamin" <?= ($row['jenis_kelamin'] = 'l') ? 'checked' : '' ?>><label>Laki-laki</label>
				<input type="radio" name="jenis_kelamin" <?= ($row['jenis_kelamin'] = 'p') ? 'checked' : '' ?>><label>perempuan</label>
			</td>
		</tr>
		<tr>
			<td>
				<button type="submit"><a href="data_warga.php" style="text-decoration: none; cursor: pointer;">Cancel</a></button>
				<button type="submit">Submit</button>
			</td>
		</tr>
	</table>
</form>
<script src="demo.js"></script>
<script src="adminlte.min.js"></script>
<script>
  $(document).ready(function () {
    $('.sidebar-menu').tree()
  })
  $('.tanggal').datepicker({
    autoclose: true,
    format: "yyyy-mm-dd"
  })
</script>
</body>
</html>