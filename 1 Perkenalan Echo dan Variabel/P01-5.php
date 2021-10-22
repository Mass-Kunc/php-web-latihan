<!-- file : P01-5.php -->
<!DocType html>
<html>
<Head>
	<Titile> Web 01-2: Belajar PHP</title>
</head>
<body>
<?php
	echo "<br/>Belajar  Menjalankan Kode PHP dengan WampServer/";
	echo "<br/> <br/>";
	echo "<b><h1>Pengembangan aplikasi WEB dengan PHP & MySQL</h1></b>";
	//Lat 3
	echo "<ol>";
	echo	"<li> Menjalankan WampServer </li>";
	echo	"<li> Menuliskan Kode PHP</li>";
	echo	"<li> Menghubungkan PHP dengan database MySQL</li>";
	echo "</ol>";
	
	//Lat 4
	$nama	= "Al Kun";
	$umur	= 15;
	$alamat	= "Jogja";
	
	echo "Nama Saya $nama <br/>"; 
	//echo "<br/>"; { seperti ini juga Bisa }
	echo "Umur Saya $umur"; 
	echo "<br/>";
	echo "Alamat Saya di $alamat"; 
	echo "<br/> <br/>"; //Enter 2 X
	
	// Lat 5
	$gaji	= 50000000;
	$masuk	= 20;
	$total	= $gaji*$masuk;
	
	echo "Gaji pokok Anda adalah Rp. $gaji <br/>";
	echo "Anda masuk kerja $masuk hari<br/>";
	echo "total Gaji Anda sebesar Rp. $total";
?>
</body>
</html>