<?php
// File : P15-PBO.php
// Objek dengan Class 

// Definisi Class
Class kendaraan
{
	var $merk;
	var $mesin;
	var $bbm;		//isi Bhn Bakar saat ini
	
	function mengisibensin($isi) {
		$this->bbm = $this->bbm + $isi; 
		echo "BBM telah diisi sebanyak <b> $isi </b> liter.<br>";
	}
	
	function mengendarai($km) {
		$minus	= ($km /25); ///BBM berkurang 1 liter setiap menempuh 25 km
		$this->bbm	= $this->bbm - $minus;
		echo "Anda telah berkendara sejauh <b>$km</b> km.<br>";
		echo "BBM berkurang sebanyak <b>$minus</b> liter.<br>";
	}
	
	function infoBBM() {
		echo "Isi BBM sekarang adalah <b>$this->bbm</b> liter<br>";
	}
}

// Definisi Objek baru = Motor
$motor			= new kendaraan(); ///
$motor->merk	= "Honda Supar";
$motor->bbm		= 1;
$motor->mesin	= 125;
	echo " Sepeda motor bermerk <b>$motor->merk</b>, mesin <b>$motor->mesin</b>
		  cc. <br>";
	
$motor->infoBBM();
$motor->mengisibensin(3);
$motor->infoBBM();
$motor->mengendarai(100);
$motor->infoBBM();

// Definisi objek baru = Mobil
$mobil			= New kendaraan(); 
$mobil->merk	= "Toyota";
$mobil->bbm		= 4;
$mobil->mesin	= 1300;
	echo "<br> Mobil merk <b>$mobil->merk</b>, Mesin <b>$mobil->mesin</b> cc. <br>";

$mobil->infoBBM();
$mobil->mengisibensin(3);
$mobil->infoBBM();
$mobil->mengendarai(170);
$mobil->infoBBM();

?>
