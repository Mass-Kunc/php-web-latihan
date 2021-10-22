<!-- file: P10-2-proses.php -->
<!-- pemrosesan form -->
<!DOCTYPE html>
<html>
<head>
	<title>P10-2 : Pemrosesan Form</title>
</head>
<body>
<?php

echo "<h2>Hasil Isian form</h2>";
if (isset($_POST['alamat'])) {
$hasil_alamat =$_POST['alamat'];
echo "Alamat : $hasil_alamat<br>";}
if (isset($_POST['kota'])) {
$hasil_kota = $_POST['kota'];
echo "Kota Asal :$hasil_kota<br>";}
if (isset($_POST['hobi_baca'])) {
$hasil_hobi_baca =$_POST['hobi_baca'];
echo "Hobi :$hasil_hobi_baca<br>";}
if (isset($_POST['hobi_main'])) {
$hasil_hobi_main =$_POST['hobi_main'];
echo "Hobi :$hasil_hobi_main<br>";}
if(isset($_POST['kelamin'])) {
$hasil_kelamin =$_POST['kelamin'];
echo "Jenis Kelamin :$hasil_kelamin<br>";}
?>
</body>
</html>