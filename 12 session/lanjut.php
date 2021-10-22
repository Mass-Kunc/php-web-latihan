<?php
// File : lanjut.php
// Pengelolaan (isi) session

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
<head>
	<title>Session : Sukses Log In</title>
</head>

<body>
	<div align="center">
	<?php
	// jika variable login = true, berarti sudah log in
	if($login == true)
	{
	?>
		<h2> Sukses Log In nya</h2>
		<p> <b><?php echo $nama ?></b> telah sukses Log In.<br>
		Anda telah log in dengan username <b><?php echo $username?></b></p>
		<p> Tulisan ini hanya bisa dibuka setelah Anda log in 
		dengan username dan password yang benar<br>
		untuk membuktikannya, silakan buka halaman ini langsung dari 
		browser atau Lampp Server tanpa Log In terlebih dahulu</p>
	
	<a href = "logout.php"> Klik disini</a> untuk log out.
	
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

</html>
	</div>
</body>

</html>
