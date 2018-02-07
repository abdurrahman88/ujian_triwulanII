<!DOCTYPE html>
<html>
<head>
	<title>Tambah santri</title>
</head>
<body>
<form action="proses/warga_proses_tambah.php" method="post">
	<h3>Tambah Warga</h3>
	<table>
		<tr>
			<td><label>Nama</label></td>
			<td>: <input type="text" name="nama"></td>
		</tr>
		<tr>
			<td><label>Nik</label></td>
			<td>: <input type="text" name="nama"></td>
		</tr>
		<tr>
			<td><label>kk</label></td>
			<td>: <input type="text" name="nama"></td>
		</tr>
		<tr>
			<td><label>Tempat lahir</label></td>
			<td>: <input type="text" name="tempat_lahir"></td>
		</tr>
		<tr>
			<td><label>Tanggal lahir</label></td>
			<td>: <input type="text" name="tanggal_lahir"></td>
		</tr>
		<tr>
			<td><label>Alamat</label></td>
			<td>: <input type="text" name="alamat"></td>
		</tr>
		<tr>
			<td><label>Jenis kelamin</label></td>
			<td>: 
				<input type="radio" name="jenis_kelamin"><label>Laki-laki</label>
				<input type="radio" name="jenis_kelamin"><label>perempuan</label>
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