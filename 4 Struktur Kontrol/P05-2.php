<?php
// File : p05-2.php
// Struktur Kontrol IF - Else
	
// Isi variable = bebas
$negara = "perancis";

if ($negara== "jerman")	
	{ $pesan = 'Katalog auf Deutsch <bR>';}
else if ($negara == "perancis")	
	{ $pesan = 'Catalogue en Francais <bR>'; }
else if ($negara == "italia")	
	{ $pesan ='Catalogo in Italiano <bR>'; }
else if ($negara == "inggris")	
	{ $pesan = ' Catalog in Inggris <bR>'; }
else 	
	{ $pesan = ' Masukkan Negara Jerman, Perancis, Italia, atau Inggris<bR>'; }

//tampilkan pesan pada browser
echo "$pesan <br>";
?>