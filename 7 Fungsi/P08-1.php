<?php
// file : p08-1 Fungsi.php
// Fungsi Sederhana 1

function HitPajak($harga)
{
	$pajak = (15/100);	//Pajak = 15%
	$nilai_pajak = $harga * $pajak;
	return $nilai_pajak;
}

$harga_barang =25000;
$pajak_barang = hitPajak($harga_barang);
 echo "Nilai barang adalah Rp. $harga_barang, dgn pajak senilai
	Rp. $pajak_barang";
	
?>