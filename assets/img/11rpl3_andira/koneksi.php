<?php
$koneksi = new mysqli('localhost', 'root', '', 'dbandira')
or die (mysqli_error($koneksi));

if (isset($_POST['simpan'])) {
	$idSiswa = $_POST['idSiswa'];
	$UTS = $_POST['UTS'];
	$PAS = $_POST['PAS'];
	$predikat = $_POST['predikat'];
	$koneksi->query("INSERT INTO nilaisiswa (idSiswa, UTS, PAS, predikat) 
		values ('$idSiswa', '$UTS', '$PAS', '$predikat')");

	header('location:nilai.php');
}
if (isset($_GET['idSiswa'])) {
	$idSiswa = $_GET['idSiswa'];
	$koneksi->query("DELETE FROM nilaisiswa where idSiswa = '$idSiswa'");
	header("location:nilai.php");
}
if (isset($_POST['edit'])) {
	$idSiswa = $_POST['idSiswa'];
	$UTS = $_POST['UTS'];
	$PAS = $_POST['PAS'];
	$predikat = $_POST['predikat'];

	$koneksi->query("UPDATE nilaisiswa SET idSiswa='$idSiswa',UTS ='$UTS',PAS='$PAS',predikat='$predikat'");
	header("location:nilai.php");
}