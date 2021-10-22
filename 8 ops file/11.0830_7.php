<?php
// file : 11.0830_7.php
// Tugas Praktikum

// membuka file baca tulis
$wadah =fopen("H:/11.0830_7.txt", "r+");

// baris pertama: count halaman
$count = fgets($wadah);
// baris kedua
$nim = fgets($wadah);
// baris ketiga
$nama = fgets($wadah);
//baris keempat tanggal
$tanggal = fgets($wadah);

//tampilkan informasi
echo "Halaman ini telah dibuka <b>$count</b> kali<br>";
echo "NIM <b>$nim</b><br>";
echo "Nama <b>$nama</b><br>";
echo "Pada <b>$tanggal</b><br>";

//Data baru
$databaru = $count +1; //update
$databaru .= "\r\n"; // ganti baris
$databaru .= $nim;
$databaru .= $nama;
$databaru .= date ("d M Y, H:i:s"); //waktu sekarang


//kebagian awal file 
rewind($wadah);
//tulis data baru
fwrite($wadah, $databaru);
//menutup file
fclose($wadah);
?>
