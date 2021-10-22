<?php

session_start();

if (isset($_SESSION['username']))	//jika sudah log in
{	// Mengambil variable username
	$username 	= $_SESSION['username'];
	$nama		= $_SESSION['nama'];
	
	// Set variable login = true
	$login	= true;
}
else
{	// jika belum login, set variabel login false
	$login	= false;
}
	
?>
<!DOCTYPE html >
<html>
<head>
	<title>Welcome to MyWarung</title>
	<link rel='icon' href='./gambar/apel.ico'>
	<link rel="stylesheet" type = "text/css" href = "./css/gaya.css">
</head>

<body>  
<div id = "wrapper">
	<?php
	if($login == true)
	{
	?>
		<h1> Selamat Datang <i><?php echo $nama ?></i></h1>
	<div id="sub">
		<img class ="gmb" src ="./gambar/unjay.jpeg" alt = "logo"> 
		"<i><?php echo $username?>"</i>
		<a href = "logout.php">Log Out</a>
	</div>
		
		<div id = "sidebara">
		   <table> 
			   <h2><th colspan=2>Kategori Tabel</th></h2>
		   	   <tr>
				   <td> <a href ="tampil1.php"> Daftar Pengunjung </a></td>		 
				   <td> <a href ="tampil2.php"> Daftar Pesanan </a> </td>
			   <tr>
		   </table>
		</div>
	
	<?php
	} else
	{
	?>
		<h2> Anda Belum Login</h2>
		<p> Silakan Log In terlebih dahulu untuk melanjutkan</p><br>
		<a href = "index.php">Klik disini</a> untuk log in.
	<?php    
	}
	?> 
</div>
</body>
	<div id = "footer">
		<p> &copy;Aldian Kuncoro(11.0830) / 2018</p>
	</div>
</html>

