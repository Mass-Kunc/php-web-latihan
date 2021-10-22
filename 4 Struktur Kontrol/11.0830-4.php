<?php
// File : 11.0830-4.php
// Tugas Praktikum

// Melakukan Perulangan dari 1-30
For ($a=1; $a<=30; $a++)
{
	echo	"ini Angka ke $a <Br>";
	
	$gj = $a%2;
		if($gj <> 0)
			{ $sebut = "Ganjil"; }
		else
			{ $sebut = "Genap"; }
		
	echo "Angka $a adalah bilangan $sebut <br><br>";
}

?> 