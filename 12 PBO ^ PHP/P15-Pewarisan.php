<?php
// File : P15-pewarisan.php
// Konsep Pewarisan

cLass pegawai 	
{
	private $nip;
	private $nama;
	
	function __construct($nip, $nama) 
	{
		$this->nip= $nip;
		$this->nama= $nama;
	}
	
	public function  tampilnip()
	{
		echo "NIP : <br><b>".$this->nip."</b><br>";
	}
	public function  tampilnama() 
	{
		echo "Nama : <br/><b> $this->nama </b> <br/>";
	}
}

cLass pegawaihonor extends pegawai
{
	private $upahharian;
	
	function __construct ($nip, $nama, $upahh)
	{	// Akses Konstruktor Induk
		parent :: __construct($nip, $nama);
		$this->upahharian= $upahh;
	}
	
	function tampilupahharian()
	{
		echo "Upah : <br/><b> Rp.".$this->upahharian."</b><br>";
	}
}

// Definisi objek baru
$karyawan_baru = new pegawaihonor("11.0830", "Kun Aldi",1230000);
$karyawan_baru->tampilnama();
$karyawan_baru->tampilnip();
$karyawan_baru->tampilupahharian();
?>
