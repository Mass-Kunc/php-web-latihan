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
<!DOCTYPE.HTML>
<Html>
<head>
	<title>Hapus Daftar Pesanan</title>
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
	<h1> Hapus Daftar Pesanan</h1>
<div id="sub">
		<img class ="gmb" src ="./gambar/unjay.jpeg" alt = "logo"> 
		"<i><?php echo $username?>"</i>
		<a href = "logout.php">Log Out</a>
</div>
<div id= "log2">
<?php
incLude "koneksi.php";

echo "<h2> Hapus Daftar Pesanan</h2>";
echo "Silakan pilih Entry yang akan dihapus ";

$query = "SELECT * FROM  pesanan";
$hasil = mysqli_query($link_id, $query);

// Buat Tabel
echo "<table width=\"100%\" style=\"border:blue 2px solid \">";
echo " <tr bgcolor=\"silver\">";
echo " <th>No</th><th>Makanan</th><th>Minuman</th><th>No Meja</th><th>Aksi</th>";
echo "</tr>";

while ($detail = mysqli_fetch_array($hasil))
{
	$no			= $detail['no'];
	$makanan	= $detail['makanan'];
	$minuman	= $detail['minuman'];
	$meja 		= $detail['no_meja'];
	echo "<tr>
			<td  align='center'>$no</td>
			<td>$makanan</td>
			<td>$minuman</td>
			<td align='center'>$meja</td>
			<td align='center'> [ <a href =\"hapus_data2.php?no=$no\"> Hapus</a>]</td>
		  </tr>";
}
echo "</table>";

$total = mysqli_num_rows($hasil);
echo "<i> Jumlah Pesanan = <b> $total </b></i>";
echo "<hr size =4 noshade> <br>";

?>
Kembali ke <a href="index.php"> Halaman Utama</a>.<br>
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
