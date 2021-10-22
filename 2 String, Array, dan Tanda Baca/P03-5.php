<?php
// File P03-5.php
// BELAJAR Tipe data PHP

// Mendefinisikan Nama & Alamat
$mhs['0769'] = 'Budi Hartono';
$mhs['0812'] = 'Sapta Hastari';
$alamat['0769'] = 'Asrama Jepara';
$alamat['0812'] = 'Kos Banyuraden';

// Mendefinisikan Konstanta Uang Jajan Mingguan 
define ('mingguan', 100000);

// Mendefinisikan Jumlah Minggu kuliah
$kuliah['0769'] = 12;
$kuliah['0812'] = 10;

// Menghitung Total Uang Saku 
$uangsaku['0769'] = mingguan * $kuliah['0769'];
$uangsaku['0812'] = mingguan * $kuliah['0812'];

// Menampilkan Data
echo '<h2> Data Mahasiswa </h2>';
echo '<i> Nama : </i><br>';
echo '<b>'.$mhs['0769']. '</b> <br>';
echo '<i>'.$alamat :['0769']. '</i> <br>';
echo $alamat ['0769']. '<br> <br>';


?>