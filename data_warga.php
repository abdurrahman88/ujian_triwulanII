<!DOCTYPE html>
<html>
<head>
	<title>Data warga</title>
</head>
<body>
	<div class="box-header with-border">
          <h3 class="box-title">Data Santri</h3>
          <a href="tambah_warga.php" class="btn btn-primary pull-right" style="text-decoration: none; cursor: pointer;">Tambah Data</a>
    </div>
<table border="1">
	<tr>
        <th style="width: 10px">No</th>
        <th>Nama</th>
        <th>Nik</th>
        <th>Kk</th>
        <th>Tempat Lahir</th>
        <th>Tanggal Lahir</th>
        <th>Alamat</th>
        <th>Jenis Kelamin</th>
        <th>Hobi</th>
        <th>Created By</th>
        <th>Tanggal Input</th>
        <th>Aksi</th>
    </tr>
    <?php
    include 'proses/koneksi.php';

    $sql = mysqli_query($connect, "SELECT *, warga.id as id_warga, warga.nama as nama_warga, user.nama as nama_user FROM warga INNER JOIN user ON warga.user_id = user.id ORDER BY tanggal_input DESC");
    $no = 1;
    while ($row = mysqli_fetch_array($sql)) {
    	echo "
    	<tr>
    		<td>".$no++."</td>
    		<td>".$row['nama_warga']."</td>
    		<td>".$row['nik']."</td>
    		<td>".$row['kk']."</td>
    		<td>".$row['tempat_lahir']."</td>
    		<td>".date("d F Y", strtotime($row['tanggal_lahir']))."</td>
    		<td>".$row['alamat']."</td>
    		<td>".(($row['jenis_kelamin'] == 'l') ? 'Laki - laki' : 'Perempuan')."</td>
    		<td>".$row['hobi'] ."</td>
    		<td>".$row['nama_user']."</td>
    		<td>".$row['tanggal_input']."</td>
    		<td>
      			<a class='btn btn-info btn-xs' href='edit_warga.php?ID=$row[id_warga]'>
        			<i class='fa fa-pencil'></i> Edit
     			</a>
      			<a class='btn btn-danger btn-xs delete' href='proses/warga_proses_hapus.php?ID=$row[id_warga]'>
        			<i class='fa fa-trash-o'></i>Hapus
      			</a>
    		</td>
    	</tr>
    	";
    }
    ?>
</table>
<form action="proses/cari.php">
	<table style="float: left;">
		<tr>
			<td><label>Cari</label></td>
			<td>: <input type="text" name="cari"></td>
			<td><input type="submit" name="submit" value="cari"></td>
		</tr>
	</table>
</form>
</body>
</html>