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
	<title> Form Daftar Pengunjung </title>
	<link rel='icon' href='./gambar/apel.ico'>
	<link rel="stylesheet" type = "text/css" href = "./css/gaya.css">
</head>
<div id = "isi">
<body>
<!--=================================================================-->
<div id = "wrapper">
	<?php
	if($login == true)
	{
	?>
		<h1> Isi Daftar Pengunjung</h1>
	<div id="sub">
		<img class ="gmb" src ="./gambar/unjay.jpeg" alt = "logo"> 
		"<i><?php echo $username?>"</i>
		<a href = "logout.php">Log Out</a>
	</div>
	<form name ="pembeli" method ="post" action="simpan1.php">
<fieldset id="log1">
	<legend> Isi Form Berikut!!</legend>
	<div id="formin">
		<p><label for ="nama"> Nama</label><br>
		<input type ="text" size="35" name="nama"></p>
		<p><label for ="alamat"> Alamat</label><br>
		<input type ="text" size="35" name="alamat"></p>
		<p><label for ="no_meja"> No Meja</label><br>	
		<input type="text" size="20" name="no_meja"> </p>
		<input type ="submit" value= "OK" name="isian">
		<input type ="reset" value="Hapus">
	</div>
	<br>Saya ingin kembali ke<a href="index.php"> Halaman Utama </a>.
</fieldset>
	</form>
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
