<?php
//File : 11.0830_5
// Tugas Praktikum

$nama = "Aldian Kuncoro";
$pisah = explode(" ",$nama);

echo 'nama saya '.$nama."<BR>";
echo "jumlah karakter nama saya(termasuk spasi) adalah ".strlen($nama).'<br>';
echo 'karakterr ke 5 s/d ke 8 = '.substr($nama, 4, 7).'<br>';
echo $pisah[0] .'<br>'. $pisah[1];

?>