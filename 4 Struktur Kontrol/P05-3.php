<?php
// File : p05-3.php
// Struktur Kontrol Switch
	
// Isi nilai 1-7
$urut = 3;
switch ($urut)
{
	case "1":
		$hari = "Minggu";
		break;
	case "2":
		$hari = "Senin";
		break;
	case "3":
		$hari = "Selasa";
		break;	
	case "4":
		$hari = "Rabu";
		break;	
	case "5":
		$hari = "Kamis";
		break;
	case "6":
		$hari = "Jumat";
		break;	
	case "7":
		$hari = "Sabtu";
		break;	
}
echo 'Sekarang Hari '.$hari;

?>