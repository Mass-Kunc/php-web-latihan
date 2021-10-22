<!-- file : P01-4.php -->
<!DocType html>
<html>
<Head>
	<Titile> Web 01-2: Belajar PHP</title>
</head>
<body>
<?php
	echo "Belajar  Menjalankan Kode PHP dengan WampServer/";
	echo "<br/> <br/>";
	echo "<b><h1>Pengembangan aplikasi WEB dengan PHP & MySQL</h1></b>";
	echo "<ol>";
	echo	"<li> Menjalankan WampServer </li>";
	echo	"<li> Menuliskan Kode PHP</li>";
	echo	"<li> Menghubungkan PHP dengan database MySQL</li>";
	echo "</ol>";
	
	$nama	= "Al Kun";
	$umur	= 15;
	$alamat	= "Jogja";
	
	echo "Nama Saya $nama <br/>"; 
	//echo "<br/>"; { seperti ini juga Bisa }
	echo "Umur Saya $umur"; 
	echo "<br/>";
	echo "Alamat Saya di $alamat"; 
	echo "<br/>";
?>
</body>
</html>