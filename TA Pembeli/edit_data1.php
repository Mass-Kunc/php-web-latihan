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
	<title>Mengedit Entry Daftar Pengunjung</title>
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
		<h1> Edit Daftar Pengunjung</h1>
<div id="sub">
		<img class ="gmb" src ="./gambar/unjay.jpeg" alt = "logo"> 
		"<i><?php echo $username?>"</i>
		<a href = "logout.php">Log Out</a>
</div>
<div id="log1">
<?php
include "koneksi.php";
$no		= $_GET['no'];

echo "<h3>Silakan Edit Daftar Pengunjung</h3>";
$query	= "SELECT * FROM pembeli WHERE no = '$no'";
$hasil	= mysqli_query($link_id, $query);

while ($detail = mysqli_fetch_array($hasil))
{
	$no		= $detail['no'];
	$nama	= $detail['nama'];
	$alamat	= $detail['alamat'];
	$meja	= $detail['no_meja'];
?>
	<form name="pembeli" method="post" action="edit_simpan1.php">
	Nama :<br>
	<input type="text" size="25" name="nama" value="<?php echo $nama; ?>"><br><br>
	Alamat :<br>
	<input type="text"size="25" name="alamat" value="<?php echo $alamat; ?>"><br><br>
	No Meja :
	<input type="text" size="3" name="no_meja" value="<?php echo $meja; ?>"><br><br>
	<input type="submit" value="Simpan" name="isian">
	<input type="reset" value="Reset">
	<a href="edit1.php"><input type="button"  value= "Batal"></a>
	<input type="hidden" name="no" value=<?php echo $no; ?>></form>
<?php
}
?>	
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
