<!-- file : Aldian_0830.php -->
<!DocType html>
<html>
<head>
	<title>Tugas Praktikum</title>
</head>
<body>
<?php
	echo "<h2><b><font face=arial>Data Karyawan PT Maju Mundur</font></b></h2>";
	
	$nama	= "Chanief";
	$umur	= 25;
	$alamat	= "Yogyakarta";
	
	echo "<font face=arial><b><i>BIODATA</i></b><BR/>";
	echo "Nama : <b>$nama</b> <br/>"; 
	echo "Usia : <b>$umur</b> tahun<br/>"; 
	echo "Alamat : <b>$alamat</b></font>"; 
	echo "<br/> <br/>"; 
#=============================================================	
	$gaji	= 50000;
	$masuk	= 25;
	$total	= $gaji*$masuk;

	echo "<font face=arial><b><i>GAJI BULAN JANUARI 2017</i></b> <br/>";
	echo "Gaji pokok : Rp. <b>$gaji</b> <br/>";
	echo "Presensi Masuk : <b>$masuk</b> hari<br/>";
	echo "Total Gaji : Rp. <b>$total</b></font>";
?>
</body>
</html>