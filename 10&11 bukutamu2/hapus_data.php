<!DOCTYPE html>
<html>
<head>
	<title> Menghapus Entry Buku Tamu  </title>
</head>
<body>
<?php
include "koneksi.php";

$no = $_GET['no'];
$query  = "DELETE FROM bukutamu WHERE no = '$no'";
$hasil	= mysqli_query($link_id, $query) or die ("error dalam menghapus data.");

echo "Data Daftar Tamu Dengan No $no Telah Dihapus. <br>";
mysqli_close($link_id);
?>
<a href ="hapus.php"> Klik disini </a> Untuk Kembali Ke Menu Hapus.<br>
<a href ="iindex.php"> Klik disini </a> Untuk Kembali Ke Menu Utama.<br>
</body>
</html>