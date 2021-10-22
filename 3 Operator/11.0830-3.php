<?php 
//File P04-4.php
// Tugas Praktikum

$presensi = 10;
$tugas = 85;
$uts = 75;
$uas = 0;

// menghitung nilai akhir
$na = ((40/100*$uas)+(30/100*$uts)+(20/100*$tugas)+(10/100*$presensi));

if 	($na >=81 && $na <= 100)   {echo ' A';}
elseif ($na >=61) {echo ' B';}
elseif ($na >=41) {echo ' C';}
elseif ($na >=21) {echo ' D';}
elseif ($na >=0)  {echo ' E';}
else 			  {echo 'MAsukkan nilai antara 0 - 100';}

$nilai['a'] = "Aku adalah $na"; 
$nilai['b'] = 'Boni';
$nilai['b'] .= 'Bones'; 
$nilai['c'] = 'Clark Jon'; 
$nilai['d'] = 'Dani Duck'; 
$nilai['e'] = 'Eko Eya '; 

echo  'ini nilai sya '.$nilai['a'].' dan Jadinya'.$;

?>