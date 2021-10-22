<?php
// file : P09-1.php
// membaca isi file teks

//membuka file
$wadah = fopen("P09-1-teks.txt", "r"); // apabila file berada di folder lain --> "D:/P09-1-teks.txt"

// jika belum mencapai end-of-file, tampilkan isinya
while (!feof($wadah))
{
	$isi = fgets($wadah);
	echo $isi;
}

//menutup file
fclose($wadah);
?>