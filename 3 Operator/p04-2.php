<?php 
//File P04-2.php
// Operator Assignment (harga diskon)

$angka1 = 27;
$angka2 = 14;
$hasil1 = $angka1*$angka2;
$hasil2 = $angka1/$angka2;
$hasil3 = $angka1%$angka2;

// Menampillkan Isi Variabel
echo "<h2> Operator Aritmatika Sederhana</h2>";
echo "$angka1 X $angka2 = $hasil1<br>";
echo "$angka1 / $angka2 = $hasil2<br>";
echo "Sisa Pembagian $angka1 terhadap $angka2 = $hasil3<br><br><br>";

// --------------------------------------------------------------------

$harga = 60000;
$diskon = 40;

// menghitung potongan dan harga akhir
$potongan = ($diskon * $harga / 100);

// Harga baru = Haga lama - potongan
// Harga dihitung dengan shortcut assigment operator
$harga_akhir = $harga;
$harga_akhir -= $potongan;

echo " Potongan untuk harga Rp. $harga sebesar Rp. $potongan <br>";
echo " Harga Akhirnya adalah $harga<br>";

?>