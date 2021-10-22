<?php
session_start();

// Jika telah sukses log in, arahkan ke file lanjut.php
iF (isset($_SESSION['username']))
	{
		header ( "location: halut.php");
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
			header ("location: halut.php");
		}
	else 
		{	// Jika isian salah, tampilkan pesan kesalahan 
			$pesan = "<p><B>Log In Salah</B>, ulangi lagi!!</p>";
		}
}
?>
<!DOCTYPE html>
<html>
<head>	
	<title>Log In </title>
	<link rel='icon' href='./gambar/apel.ico'>
	<link rel="stylesheet" type = "text/css" href = "./css/gaya.css">
</head>
<body>
<div id="wrapper">

	<div>
	<h1>Log In Form.. </h1><br><br>
	<img class ="loki" src ="./gambar/kk.ico" alt = "logo">	
	<form  action ="index.php" method="post">
	</div>	
	
	<fieldset id="log">
		<legend>Isi Form Berikut !!</legend>
		<div id="login">
			<p><label for ="username">Username</label><br>
			<input type ="text" size = 30 name = "username" ></p>
		
			<p><label for ="password">Password</label><br>
			<input type ="password" size = 30 name = "password" ></p>
		
			<input type ="submit" value="Log In">
			<input type ="reset" value="Hapus">
			<?php if (isset($pesan)){?><p align="center"><?php echo $pesan;}?> </p>	
		</div>
	</fieldset>	
	</form>
</div>	
</body>

</html>
