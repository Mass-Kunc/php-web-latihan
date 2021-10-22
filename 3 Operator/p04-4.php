<?php 
//File P04-4.php
// Operator Perbandingan (if..)

//ubah isi $Ipk untuk melihat hasil yang berbeda
$ipk = 1;

// Membandingkan isi variabel $ipk

if ($ipk >= 3.5 && $ipk <=4)	{Echo 'Anda Lulus summa Cumlaude';}
elseif ($ipk >=3)		{echo ' Anda lulus cumlaude';}
elseif ($ipk >=2.75)	{echo ' Anda lulus dengan nilai baik';}
elseif ($ipk >=2.5)		{echo ' Anda lulus dengan nilai Cukup';}
else					{echo ' Nilai error';}

echo "<br>Nilai IPK Saya $ipk ";
?>