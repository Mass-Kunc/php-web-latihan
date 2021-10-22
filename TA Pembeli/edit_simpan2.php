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
	<title>Mengedit Entry Daftar Pesanan</title>
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
		<h1> Daftar Pesanan Berhasil Di Edit</h1>
<div id="sub">
		<img class ="gmb" src ="./gambar/unjay.jpeg" alt = "logo"> 
		"<i><?php echo $username?>"</i>
		<a href = "logout.php">Log Out</a>
</div>	
<?php
include "koneksi.php";

if (isset($_POST['isian'])) {
	$no			= $_POST['no'];
	$makanan	= $_POST['makanan'];
	$minuman	= $_POST['minuman'];
	$meja		= $_POST['no_meja'];
	
	$query		= "UPDATE pesanan SET makanan = '$makanan', minuman = '$minuman', no_meja = '$meja' WHERE no = '$no'";
	$hasil		= mysqli_query($link_id, $query) or die (mysqli_error());
	echo "<br> Kembali ke <a href=\"edit2.php\">Menu Edit</a>.";
	echo "<br> Kembali ke <a href=\"tampil2.php\">Daftar Pesanan</a>.";

} else {
	echo "Pilihlah dahulu data yang akan diedit dalam file <strong>edit2.php</strong>";
}
mysqli_close($link_id);
?>	
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
