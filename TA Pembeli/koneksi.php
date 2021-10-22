<?php
// file: koneksi.php
// Koneksi PHP dengan MySQL

$host	 = "localhost";
$account = "root";
$password= "";
$namadb	 = "ta_paw0830";

//koneksi ke database
$link_id =  mysqli_connect($host, $account, $password, $namadb)
			or die ("Koneksi Error Bro!");
//echo "&copyAldian Kuncoro 11.0830";
?>
