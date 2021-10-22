<!DOCTYPE html>
<!--file : tampil.php-->
<html>
<head>
	<title>Menampilkan Isi Buku Tamu</title>
</head>
<body>

<?php
//Menampilkan Isi Buku Tamu
include "koneksi.php";

//Query SQL untuk menampilkan data
$query	= "SELECT * FROM bukutamu";
$hasil	= mysqli_query($link_id, $query);

// menulis judul
echo "<h2>Buku Tamu </h2>";

//Total isian buk tampil
$total = mysqli_num_rows($hasil);

echo "<i>Jumlah isian buku tamu = <b>$total<b> buah</i>";
echo "<hr size=1 noshade>";

//bikin tabelnya
echo "<table widht=\"100%\" style=\"border : yellow 2px solid\">";

echo "<tr bgcolor =\"green\">";
echo "<th> No </th> 
	  <th> Nama </th> 
	  <th>Alamat</th> ";
echo "</tr>";
// Menampilkan data isian/inputan
while ($detail = mysqli_fetch_array($hasil))
{
	$no		= $detail['no'];
	$nama	= $detail['nama'];
	$alamat	= $detail['alamat'];
	
	echo "<tr bgcolor =\"silver\">";
	echo "<td>$no</td>
		  <td>$nama</td>
		  <td>$alamat</td> 
		  <br>";
	echo "</tr>";
}
echo "</table>";
echo "<a href=\"iindex.php\">Klik disini</a> untuk kembali ke menu utama.";

// menutup koneksi db
mysqli_close($link_id);
?>
</body>
</html>