<!DOCTYPE html>
<html>
<head>
	<title> Memilih Entry Yang akan Diedit</title>
</head>
<body>
<?php
include "koneksi.php";
$query = "SELECT * FROM bukutamu";
$hasil = mysqli_query($link_id, $query);

echo "<h2>Edit Entry Daftar Pegawai</h2>";
echo "Silahkan Pilih Entry Yang akan Di Edit.";
$total = mysqli_num_rows($hasil);

echo "<i>Jumlah isian buku tamu = <strong>$total</strong>orang</i>";
echo "<hr size=1 noshade>";

echo "<table width=\"100%\" style=\"border : green 2px solid\">";
echo "<tr bgcolor=\"silver\">
	  <th>No</th><th>Nama</th><th>Alamat</th><th>Hobi</th><<th>Aksi</th>";
echo "</tr>";

while ($detail = mysqli_fetch_array($hasil))
{
	$no		= $detail['no'];
	$nama	= $detail['nama'];
	$alamat	= $detail['alamat'];
	$hobi	= $detail['hobi'];
	
	echo "<tr>";
	echo "<td>$no</td>";
	echo "<td>$nama</td>";
	echo "<td>$alamat</td>";
	echo "<td>$hobi</td>";
	echo "<td>[ <a href=\"edit_data.php?no=$no\"> Edit Data</a> ]</td>";
	echo "</tr>";
}
echo "</table>";
mysqli_close($link_id);
?>
<a href="iindex.php"> Klik Disini </a> Untuk Kembali ke menu Utama.
</body>
</html>