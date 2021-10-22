<!-- File Hapus.php -->
<!DOCTYPE.HTML>
<Html>
<head>
	<title> Memilih Entry yang akan dihapus</title>
</head>
<body>
<?php
//Memilih isi buku tamu yang akan dihapus
incLude "koneksi.php";

// Mengambil data buktam
echo "<h2> Hapus Isian Buku Tamu</h2>";
echo "Silakan pilih Entry yang akan dihapus ";

$query = "SELECT * FROM  bukutamu";
$hasil = mysqli_query($link_id, $query);

// Menghitung total isi buktam
$total = mysqli_num_rows($hasil);

// Menampilkan total isi buktam
echo "<i> Jumlah isi Buku Tamu = <b> $total </b></i>";
echo "<hr size =1 noshade>";

// Membentuk tabel untuk isi Buktam
echo "<table width=\"96%\" style=\"border:blue 2px solid \">";
echo " <tr bgcolor=\"silver\">";
echo " <th>No</th><th>Nama</th><th>Alamat</th><th>Hobi</th><th>Aksi</th>";
echo "</tr>";

// Menampilkan semua isi buktam
while ($detail = mysqli_fetch_array($hasil))
{
	$no		= $detail['no'];
	$nama	= $detail['nama'];
	$alamat	= $detail['alamat'];
	$hobi	= $detail['hobi'];
	echo "<tr>
			<td>$no</td>
			<td>$nama</td>
			<td>$alamat</td>
			<td>$hobi</td>
			<td> [ <a href =\"hapus_data.php?no=$no\"> Hapus Data</a>]</td>
		  </tr>";
}
echo "</table>";
?>
<a href="iindex.php"> Klik Disini</a> untuk kembali ke menu utama

</body>
</html>
