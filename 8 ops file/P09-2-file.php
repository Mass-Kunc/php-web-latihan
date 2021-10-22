<?php
// file : P09-2.php
// membaca isi file teks / baris

// membuka file
$wadah = fopen("P09-2-baris.txt", "r");
// Buat UnOrdered List ===========================
echo "<ol start=0 >";

//jika belum mencapai end-of-file, tampilkan isinya
while (!feof($wadah)) // Membaca isi file 1 baris kebawah setelah di echo & ! utk berhenti setlh smpe akhir
{
	$isi = fgets($wadah);
	echo "<li>".$isi."</li>";
}
echo "</ol>";
//===========================

//menutup file
fclose($wadah);
?>