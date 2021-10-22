<!-- P10-1 proses.php-->
<!-- Pengisian form -->

<!Doctype html>

<html>
<head >
 <TITLE> p01-1 fORM </TItle>
</head>
<Body>

<?php
//jika sudah diisi
if (isset($_post['isian']))
{	  $hasil_username = $_post['username'];
	  $hasil_email = $_post['email'];
	  $hasil_password = $_post['pass'];
	  
//cetak hasilnya
echo "<h1> Wellcome To PAW</h1>";
echo "<ul><li>  Username Anda = <b> $hasil_username </b> </li>
	 <li> Email Anda = <b> $hasil_email </b> </li>
	 <li> Password Anda  = <b> $hasil_password</b> </li> 
	 </ul>";
}	 
//jika belum diisi
else 
{	 Echo "isilah form dalam file <strong>p10-1-form.php</strong> dahulu";
}
?>		
</body>
</html>