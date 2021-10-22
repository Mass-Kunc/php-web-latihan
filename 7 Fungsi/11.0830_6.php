<?php
// file : 11.0830_6.php
// Tugas Praktikum

function tunjangan ($gaji)
{
	$tjg = (15/100);
	$hasil = $gaji * $tjg;
	return $hasil;
}

function totgaji($a, $b)
{
	$hasil = $a + $b;
	return $hasil;
}

$gajidasar = 1000000;	// Gaji dasar sebesar 1jt
$tunj = tunjangan($gajidasar);
$gaji_total = totgaji($gajidasar, $tunj);

echo "Gaji dasar sebesar Rp. $gajidasar, Tunjangan sebesar Rp. $tunj,
	dan Total Gaji sebesar Rp. $gaji_total";
	
?>
