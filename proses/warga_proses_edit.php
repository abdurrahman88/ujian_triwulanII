<?php
session_start();
if (isset($_SESSION['login'])) {
	include 'koneksi.php';
	$nama = isset($_POST['nama']) ? $_POST['nama'] : '';
	$nik = isset($_POST['nik']) ? $_POST['nik'] : '';
	$kk = isset($_POST['kk']) ? $_POST['kk'] : '';
	$tempat = isset($_POST['tempat_lahir']) ? $_POST['tempat_lahir'] : '';
	$tanggal = isset($_POST['tanggal_lahir']) ? $_POST['tanggal_lahir'] : '';
	$jenis = isset($_POST['jenis_kelamin']) ? $_POST['jenis_kelamin'] : '';
	$id = isset($_POST['di']) ? $_POST['di'] : '';
	$tanggal_input 	= date('Y-m-d H:i:s');
	$user_id 		= $_SESSION['user_id'];

	if (!empty($nama) && !empty($nik) && !empty($kk) && !empty($tempat) && !empty($tanggal) && !empty($jenis)) {
		mysqli_query($connect, "
			UPDATE warga 
			SET nama = '$nama', nik = '$nik', kk = '$kk' tempat_lahir = '$tempat', tanggal_lahir = '$tanggal', alamat = '$alamat', jenis_kelamin = '$jenis'
			WHERE id = '$id'");
		header("location:../data_warga.php");
	} else {
		echo "Silahkan lengkapi data <a href='../tambah_warga.php'>warga</a>";
	}
} else {
	echo "Please <a href='../form_login.php'>login</a> first.";
}
?>

