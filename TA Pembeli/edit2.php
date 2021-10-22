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
	<title> Memilih Entry Yang akan Diedit</title>
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
	<h1> Edit Daftar Pesanan</h1>
<div id="sub">
		<img class ="gmb" src ="./gambar/unjay.jpeg" alt = "logo"> 
		"<i><?php echo $username?>"</i>
		<a href = "logout.php">Log Out</a>
</div>
<div id="log2">
<?php
include "koneksi.php";
$query = "SELECT * FROM pesanan";
$hasil = mysqli_query($link_id, $query);

echo "Silahkan Pilih Entry Yang akan Di Edit.<br>";

echo "<table width=\"100%\" style=\"border : green 2px solid\">";
echo "<tr bgcolor=\"#9AEA7B\">
	  <th>No</th><th>Makanan</th><th>Minuman</th><th>No Meja</th><th>Aksi</th>";
echo "</tr>";

while ($detail = mysqli_fetch_array($hasil))
{
	$no		= $detail['no'];
	$makanan= $detail['makanan'];
	$minuman= $detail['minuman'];
	$meja	= $detail['no_meja'];
	
	echo "<tr bgcolor=\"#BEC3BC\">";
	echo "<td align='center'>$no</td>";
	echo "<td>$makanan</td>";
	echo "<td>$minuman</td>";
	echo "<td align='center'>$meja</td>";
	echo "<td align='center'>[ <a href=\"edit_data2.php?no=$no\"> Edit</a> ]</td>";
	echo "</tr>";
}
echo "</table>";

$total = mysqli_num_rows($hasil);
echo "<br>Jumlah Pesanan = <b>$total pesanan</b>";

mysqli_close($link_id);

echo "<br><hr size=4 noshade><br>";
?>
Kembali ke <a href="index.php"> Halaman Utama </a>.<br>
  Kembali Ke <a href ="tampil2.php"> Daftar Pesanan</a>
 </div>
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
