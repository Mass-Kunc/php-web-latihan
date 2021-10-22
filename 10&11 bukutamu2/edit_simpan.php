<!-- file: edit_simpan.php -->
<!DOCTYPE html>
<html>
<head>
	<title>Mengedit Entry Buku Tamu</title>
</head>
<body>
<?php

include "koneksi.php";


if (isset($_POST['isian'])) {
	$no			= $_POST['no'];
	$nama		= $_POST['nama'];
	$alamat		= $_POST['alamat'];
	$hobi		= $_POST['hobi'];
	
	
	$query		= "UPDATE bukutamu SET nama = '$nama', alamat = '$alamat', hobi = '$hobi' WHERE no = '$no'";
	$hasil		= mysqli_query($link_id, $query) or die (mysqli_error());
	echo "Data Anda telah diubah.<br><a href=\"edit.php\">Klik disini</a> untuk kembali ke menu Edit.";
} else {
	echo "Pilihlah dahulu data yang akan diedit dalam file <strong>edit.php</strong>";
}


mysqli_close($link_id);
?>
</body>
</html>