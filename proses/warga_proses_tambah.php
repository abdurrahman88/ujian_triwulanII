<?php
session_start();
if (isset($_SESSION['login'])) {
	include 'koneksi.php';

	$nama   	= isset($_POST['nama']) ? $_POST['nama'] : '';
	$nik   	= isset($_POST['nik']) ? $_POST['nik'] : '';
	$kk   	= isset($_POST['kk']) ? $_POST['kk'] : '';
	$alamat   	= isset($_POST['alamat']) ? $_POST['alamat'] : '';
	$tempat   	= isset($_POST['tempat_lahir']) ? $_POST['tempat_lahir'] : '';
	$tanggal    = isset($_POST['tanggal_lahir']) ? $_POST['tanggal_lahir'] : '';
	$jenis   	= isset($_POST['jenis_kelamin']) ? $_POST['jenis_kelamin'] : '';
	$tanggal_input = date('Y-m-d H:i:s');
	$user_id = $_SESSION['user_id'];

	if (!empty($nama) && !empty($alamat) && !empty($tempat) && !empty($tanggal) && !empty($jenis) && !empty($nik) && !empty($kk)) {
		mysqli_query($connect, "INSERT INTO warga VALUES (null, '$nama', '$tempat', '$tanggal', '$alamat', '$jenis', '$nik', '$kk', '$user_id', '$tanggal_input')");
		header("location:../data_warga.php");
	} else {
		echo "Silahkan lengkapi data anda <a href='../tambah_warga.php'>Data warga</a> ";
	}
} else {
	echo "Please <a href='../form_login.php'>login</a> first.";
}
?>