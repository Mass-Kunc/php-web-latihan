<?php
session_start();

if (isset($_SESSION['username']))	
{	
	$username 	= $_SESSION['username'];
	$nama		= $_SESSION['nama'];
	
	$login	= true;
}
else
{
	$login	= false;
}
	
?>
<!DOCTYPE html>
<html>
<head>
	<title> Menghapus Entry Daftar Pengunjung  </title>
	<link rel='icon' href='./gambar/apel.ico'>
	<link rel="stylesheet" type = "text/css" href = "./css/gaya.css">
</head>
<body>
<div id = "wrapper">
<!--=================================================================-->
<?php
if($login == true)
{
?>
	<h1> Hapus Daftar Pengunjung Sukses</h1>
<div id="sub">
		<img class ="gmb" src ="./gambar/unjay.jpeg" alt = "logo"> 
		"<i><?php echo $username?>"</i>
		<a href = "logout.php">Log Out</a>
</div>
<?php
include "koneksi.php";

$no = $_GET['no'];
$query  = "DELETE FROM pembeli WHERE no = '$no'";
$hasil	= mysqli_query($link_id, $query) or die ("error dalam menghapus data.");

echo "Data Daftar Pengunjung  No <b>$no</b>, Telah Dihapus. <br>";
mysqli_close($link_id);
?>
<a href ="hapus1.php"> Hapus Data Lagi</a>.<br>
 Kembali Ke <a href ="index.php"> Halaman Utama </a>.<br>
 Kembali Ke <a href ="tampil1.php"> Daftar Pengunjung </a>
<!--=================================================================-->			
<?php
} else
{
?>
	<div align="center">
	<h2> Anda Belum Login</h2>
	<p> Silakan <a href = "index.php"> Log In</a> terlebih dahulu 
	untuk melanjutkan.</p>
<?php
}
?>  
</div>
</body>
</html>
