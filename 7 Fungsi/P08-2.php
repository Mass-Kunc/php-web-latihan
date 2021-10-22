<?php
// file : p08-2 Fungsi.php
// Fungsi Sederhana 2

Function tambahAngka ($angka1, $angka2)
{
	$hasil = $angka1+ $angka2;
	return $hasil;
}

$a1 = 54;
$a2 = 38;
$jumlah = TambahAngka($a1, $a2);
	echo "$a1 ditambah $a2 = $jumlah";
	
?>