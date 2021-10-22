<?php
// File P03-1.php
// Tipe Data String

$nama = "Ananda Maria Diana";
$kata1 = "Nama Saya adalah $nama";
$kata2 = 'nama Saya adalah $nama';

// Lihat perbedaan hasil saat menggunakan (") dan (') ...... Perbedaannya Penggunaan tanda “ akan memproses isi variabel  sebelum ditampilkan 
// sedang penggunaan tanda ‘ tidak akan memproses isi variabel-->

echo '<h3> Contoh Tipe Data String </h3> ';
echo ' Contoh Tipe Data String tanpa variabel <br>';
echo $kata1;
echo "<br>";
echo $kata2;
?>