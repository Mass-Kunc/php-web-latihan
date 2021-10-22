<?php
// file : p08-3 Kuadrat.php
// Fungsi Sederhana 3

function kuadrat($angka)
{
	$hasil = $angka * $angka;
	return $hasil;
}

$x = 10;
$y = kuadrat($x);

echo "$x kuadrat = $y";

?>