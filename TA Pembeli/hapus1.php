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
	<title>Hapus Daftar Pengunjung</title>
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
	<h1> Hapus Daftar Pengunjung</h1>
<div id="sub">
		<img class ="gmb" src ="./gambar/unjay.jpeg" alt = "logo"> 
		"<i><?php echo $username?>"</i>
		<a href = "logout.php">Log Out</a>
</div>
<div id="log2">
<?php
incLude "koneksi.php";

echo "<h2> Hapus Daftar Pengunjung</h2>";
echo "Silakan pilih Entry yang akan dihapus ";

$query = "SELECT * FROM  pembeli";
$hasil = mysqli_query($link_id, $query);

// Buat Tabel
echo "<table width=\"100%\" style=\"border:2px solid blue\">";
echo " <tr bgcolor=\"silver\">";
echo " <th>No</th><th>Nama</th><th>Alamat</th><th>No Meja</th><th>Aksi</th>";
echo "</tr>";

while ($detail = mysqli_fetch_array($hasil))
{
	$no		= $detail['no'];
	$nama	= $detail['nama'];
	$alamat	= $detail['alamat'];
	$meja 	= $detail['no_meja'];
	echo "<tr>
			<td align='center'>$no</td>
			<td>$nama</td>
			<td>$alamat</td>
			<td align='center'>$meja</td>
			<td align='center'> [ <a href =\"hapus_data1.php?no=$no\"> Hapus </a>]</td>
		  </tr>";
}
echo "</table>";

$total = mysqli_num_rows($hasil); 
echo "<i> Jumlah  Pesanan = <b> $total </b></i> <br>";
echo "<hr size =4 noshade> <br>";
?>
Kembali ke <a href="index.php"> Halaman Utama</a>.
 <br>  Kembali Ke <a href ="tampil1.php"> Daftar Pengunjung</a>
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
