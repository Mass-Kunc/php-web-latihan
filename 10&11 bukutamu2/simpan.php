<!DOCTYPE html>
<!--file : simpan.php
	Menyimpan isi buku tamu dengan MySQL -->
<html>
<head>
	<title>Simpan Isian Buku Tamu</title>
</head>
<body>
<?php
include "koneksi.php";
	
//mengambil data dari form sebelumnya
if (isset($_POST['isian'])) { //jika sudah diisi
$isi_nama	= $_POST['nama'];
$isi_alamat	= $_POST['alamat'];
$isi_hobi	= $_POST['hobi'];

// Memasukkan data ke dalam database
$query	="INsERT INTO bukutamu (nama, alamat, hobi)
		  VALuES('$isi_nama','$isi_alamat','$isi_hobi')";
$sql	= mysqli_query($link_id, $query) or die ("Error dalam menyimpan.");

echo "Data Anda telah berhasil disimpan.<br>";
echo "<a href=\"iindex.php\">Klik disini</a> untuk kembali.";
} else {		//jika belum diisi
echo "Anda belum mengisi form buku tamu dalam file <strong>isi.php</strong><br>";
echo "<a href=\"isi.php\">Klik disini</a> untuk mengisi form.";
}
?>
</body>
</html>
