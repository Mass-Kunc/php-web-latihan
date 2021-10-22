<?php
// File P03-4.php
// BELAJAR KONSTANTA

// Mendefinisikan Konstanta Phi
define ('phi', 3,14);
$jari = 20;
$tinggi = 30;

// Menghitung L&V Lingkaran & Segi3
$luas = phi * $jari * $jari;
$vol = phi * $jari * $jari * $tinggi;

echo '<h2> Contoh Perhitungan dg Konstanta </h2>';
echo "Luas Lingkaran dengan Jari - Jari $jari cm dan Luas $luas cm2 <br>";
echo "Volume Silinder dengan jari - jari $jari cm dan Tinggi $tinggi cm adalah $vol cm3";
?>