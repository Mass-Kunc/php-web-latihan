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
	<title> Session Log Out </title>
</head>

<body>
<div align ="center">
<h2> Log Out </h2>
<p> Anda telag Log Out dari SESSION yang aktif.<br>
<a href = "index.php"> klik disini </a> untuk kembali log in.
</div>
</body>
</html>
