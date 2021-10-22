<?php
// File P03-3.php
// Tipe Data Array

$mobil = array('Jazz','Innova', 'Xenia');

//menggunakan associative array
$usia['Nanda'] = '20';
$usia['Dinda'] = '21';
$usia['Kanda'] = '22';

echo "<h3> contoh Tipe Data Array</h3>";
echo 'Merk Mobil yang terkenal diantaranya adalah '.$mobil[0].', '.$mobil[1].", dan ".$mobil[2]."<br>";

echo 'Usia Dinda sekarang adalah '.$usia['Dinda'].' tahun <br>';
echo "Sedang Usia Kanda sekarang adalah ".$usia['Kanda']." tahun";
?>