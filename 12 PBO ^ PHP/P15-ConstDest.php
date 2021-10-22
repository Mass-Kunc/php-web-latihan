<?php 
// file : P15-Constructor.php
// Cintoh construktor & destructor

cLass orang {
	public  $nama ;
	public  $jeniskelamin;
	
// Construktor
	function __construct ($namaku, $jenisku) {
		$this->nama	= $namaku;
		$this->jeniskelamin = $jenisku;
		echo "<p> Lahir : Selamat datang ke dunia, seorang <b>$this->jeniskelamin</b>
			bernama <b>$this->nama.</b> </p>";
		}
		
	function belajar () {
		echo "<p>Mari terus belajar untuk meningkatkan kualitas hidup</p>";
		}
// Destructor
	function __destruct() {
		echo "<p> Mati : Inalillahi, kembali ke hadirat Ilahi <br>
			Selamat Jalan, <b>".$this->nama."</b></p>";
		}
	}

//instaniasi class orang
$seseorang = new orang ("Hanabi", "Laki-Laki");
$seseorang->belajar();
unset ($seseorang);
?>
