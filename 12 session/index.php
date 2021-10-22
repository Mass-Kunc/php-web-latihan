<?php
// File :index.php
// Log in form untuk session
/*------------------------------------*/

session_start();

// Jika telah sukses log in, arahkan ke file lanjut.php
iF (isset($_SESSION['username']))
	{
		header ( "location: lanjut.php");
	}

// Jika telah mengisi form, cek validitas username & password
if( isset($_POST['username'] ))
{
	include "koneksi.php";
	
	
	// Ambil isian form dari user
	$isi_username = $_POST['username'];
	$isi_password = $_POST['password'];
	
	// Mencocokan username & password dengan data di database myAdmin
	$query = "select * from user where username = '$isi_username'
		 	 And password = '$isi_password'";
	$hasil = mysqli_query($link_id, $query);
	
	// Jika isian form sesuai dengan username dan password yang benar
	if(mysqli_num_rows($hasil))
		{ 	// menyimpan variable username & nama di session & mengarahkannya
			$detail = mysqli_fetch_array($hasil);
			$_SESSION['username'] =  $isi_username;
			$_SESSION['nama']	  =  $detail['nama'];
			mysqli_close($link_id);
			header ("location: lanjut.php");
		}
	else 
		{	// Jika isian salah, tampilkan pesan kesalahan 
			$pesan = "<p><B>Anda salah Log In</B> ulangi lagi</p>";
		}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title> Session : Log In </title>
	<Style type="text/css">
	label		{ font-weight :bold}
	legend		{font-style:italic }
	fieldset	{ Width: 270px; text-align:center}
	body		{ text-align : center}
	</Style>
</head>
<body>
	<?php
	if (isset($pesan)) echo $pesan; 
	?>
	
	<div align="center">
	<h2>Log In Form.. </h2>
	<form  action ="index.php" method="post">
	<fieldset>
		<legend>Isi Form Berikut !!</legend>
		<p><label for ="username">Username</label><br>
		<input type ="text" size = 22 name = "username" ></p>
		<p><label for ="password">Password</label><br>
		<input type ="password" size = 22 name = "password" ></p>
		<input type ="submit" value="Log In">
		<input type ="reset" value="Hapus">
	</fieldset>
	</form>
	</div>
</body>

</html>
