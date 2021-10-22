<?php
//File : P07-1
//Fungsi echo & printf

$angka1 = 67;
$angka2 = 67;

echo "variabel angka1 berisi $angka1 <br>";
echo "Variabel angka2 brisi $angka2<br>";

echo "penulisan kombinasi  angka dengan printf(),<br>";
printf ("angka1 dalam biner = %b", $angka1); echo '<br>';
printf ("angka1 dalam integer = %d \n", $angka1);echo '<br>';
printf ("angka1 dalam notasi = %e \n", $angka1);echo '<br>';
printf ("angka1 dalam bertanda = %u \n", $angka1);echo '<br>';
printf ("angka2 tak bertanda = %u \n", $angka2);echo '<br>'; //unsigned
printf ("angka1 pecahan= %f \n", $angka1);echo '<br>'; //floating point
printf ("angka1 DAlam oktal = %o \n", $angka1);echo '<br>'; 
printf ("angka1 dalam hexsa = %x \n", $angka1);echo '<br>'; 

?>