<?php
// File : Logout.php
// Log Out Session yang aktif

Session_start();
// hapus variable username di session aktif
unset($_SESSION['username']);
uNSet($_SESSION['password']);
// Tutup session aktif
Session_destroy();
?>
<!DOCTYPE html>
<html>
<head>
	<title> Log Out </title>
	<link rel='icon' href='./gambar/apel.ico'>
	<link rel="stylesheet" type = "text/css" href = "./css/gaya.css">
</head>

<body>
<div align ="center">
<h2> Bye Bye </h2>
<p>Aku Ingin <a href = "index.php">Log In </a>Lagi.<br>

</div>
</body>
</html>
