<!-- file: tugsproses.php -->
<!--  -->
<!DOCTYPE html>
<html>
<head>
	<title>Tugas Praktikum 8</title>
</head>
<body>
<?php
echo "<h1>Hasil Identitas</h1>";

if (isset($_POST['nama'])) {
$hasil_nama =$_POST['nama'];
echo "nama : $hasil_nama<br>";}
if (isset($_POST['kelamin'])) {
$jenis_kelamin = $_POST['kelamin'];
echo "jenis kelamin :$jenis_kelamin<br>";}
if (isset($_POST['tempat'])) {
$hasil_tempat =$_POST['tempat'];
echo "Tempat Lahir :$hasil_tempat<br>";}
if (isset($_POST['tanggal'])) {
$hasil_tanggal =$_POST['tanggal'];
echo "Tanggal lahir :$hasil_tanggal<br>";}
if (isset($_POST['agama'])) {
$hasil_agama =$_POST['agama'];
echo "Agama :$hasil_agama<br>";}
if (isset($_POST['kn'])) {
$hasil_kn =$_POST['kn'];
echo "Kewarganegaraan :$hasil_kn<br>";}
if (isset($_POST['alamat'])) {
$hasil_alamat =$_POST['alamat'];
echo "alamat :$hasil_alamat<br>";}




?>
</body>
</html>