<?php
//File : P07-2
//Fungsi explode implode
// Tanda petik1 (') = petik2 (")

$pizza = 'Potnongan1*Potongan2*Potongan3*Potongan4*Potongan5*Potongan6';
$potong=explode("*", $pizza);

echo $potong[5]."<br>" ; //Hasil = potongan 6
echo $potong[4]."<br>" ; //Hasil = potongan 5

$kata = Array('Sasetyoo', 'Yanuar', "Susilo", '08123');
$gabung = Implode ('_',$kata);

Echo "<br>".$gabung;
?>
