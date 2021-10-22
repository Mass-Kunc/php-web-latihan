<?php
// File : 11.0830_Aldian.php
// Tugas

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

class pegawaitetap extends pegawai
{
	private $upahbulanan ;
	private $tunjangan ;
	
	function __construct($nip, $nama, $upahbulan, $tunjang)
	{
		parent:: __construct($nip, $nama);
		$this->upahbulanan=$upahbulan;
		$this->tunjangan=$tunjang;
	}
	function tampilupahbulanan()
	{
		echo "Upah Bulanan : <br><b>Rp. $this->upahbulanan</b><br>";
	}
	function tampiltunjangan()
	{
		echo "Tunjangan : <br><b>Rp. $this->tunjangan</b>";
	}
}

$baru = new pegawaitetap(8908,"Alexander Poniman", 350000, 25000);
$baru->tampilnip();
$baru->tampilnama();
$baru->tampilupahbulanan();
$baru->tampiltunjangan();

?>
