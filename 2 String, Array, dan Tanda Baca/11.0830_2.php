<?php
// 11.0830_2.php
// Tugas Praktikum

$karyawan['J'] = 'John Darso';
$karyawan['T'] = 'Tejo Wiliam';

define ('gaji', 2000);

$hari['J'] = 3;
$hari['T'] = 4;
$total['J'] = gaji * $hari['J'];
$total['T'] = gaji * $hari['T'];
$alamat['J'] = 'Bandung';
$alamat['T'] = 'Paris van Java';


echo '<h2> Biodata Karyawan </h2>';
echo 'Nama : <b>'.$karyawan['J']. ' </b> <br>';
echo 'Alamat : <b>'.$alamat['J']. '</b> <br>';
echo 'Gaji Harian : <b>Rp. '.gaji. '</b> <br> <br>';

echo 'Gaji Harian <b>'.$karyawan['J'].'</b> adalah <b>Rp. '.gaji.'</b> </br>';
echo ' <b>' .$karyawan['J'].'</b> Masuk Selama <b>' .$hari['J']. ' Hari</b> dalam sepekan ini, sehingga total gajinya sebesar <b>Rp. '.$total['J']. '</b>';

?>