<?php
// file : P09-3.php
// membaca isi file untuk couter halaman

// membuka file baca tulis
$wadah =fopen("P09-3-counter.txt", "r+");

// baris pertama: count halaman
$count = fgets($wadah);

// baris kedua : alamat IP
$alamat = fgets($wadah);

// baris ketigs : tanggal
$tanggal = fgets($wadah);

//tampilkan informasi
echo 	"Halaman ini telah dibuka <B>$count</b> kali<br>
		Terakhir kali dibuka dari IP <b>$alamat</b><br>
		Pada Tanggal <b>$tanggal</b> <br>" ;
		
// Persiapan data baru
$databaru = $count + 1 ; //update penghitung
$databaru .= "\r\n" ; //ganti baris
$databaru .= $_server['remote_addr'];  // alamat IP myself
$databaru .= "\r\n" ; //ganti baris
$databaru .= date ('d M Y, H:i:S'); // waktu sekarang

// kembali ke bag awal / memutar ulang refres
rewind($wadah);
// untuk menulis data baru
fwrite($wadah, $databaru);

fclose($wadah);
?>
