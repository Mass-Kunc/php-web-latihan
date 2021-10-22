<?php
//File : P07-2
//substr & str_replace

$untai = 'Aplikasi WEB'; // Dihitung dari '0' --> A=0
echo substr($untai, 2); // hasil = likasi web
echo "<br>". substr($untai, 1, 3); // hasil = pli 
echo '<br>'. substr($untai, 0, 5); // hasil = aplik
Echo '<br>'. strlen($untai);	// = JUMLAH KARAKTER dari $untai

$lama = "You should eat fruits, vegetables, and fiber lllllll every day.";
$healty = array('fruits', "vegetables", "fiber", 'lllllll');
$yumy = array("pizza", 'beer', 'ice cream', 'kkkkkkk');
$baru = str_replace($healty, $yumy, $lama); //str_replace('kata yang mau diganti', 'diganti jd apa', variabel yg ditunjuk);

echo '<br>'.$lama."<br>";
echo $baru."<br>";


?>