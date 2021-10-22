<!-- file: edit_data.php -->
<!DOCTYPE html>
<html>
<head>
	<title>Mengedit Entry Buku Tamu</title>
</head>
<body>
<?php

include "koneksi.php";

$no		= $_GET['no'];

echo "<h2>Mengedit Isian Buku Tamu</h2>";
$query	= "SELECT * FROM bukutamu WHERE no = '$no'";
$hasil	= mysqli_query($link_id, $query);


while ($detail = mysqli_fetch_array($hasil))
{
	$no		= $detail['no'];
	$nama	= $detail['nama'];
	$alamat	= $detail['alamat'];
	$hobi	= $detail['hobi'];
?>
	<form name="bukutamu" method="post" action="edit_simpan.php">
	Nama :<br>
	<input type="text" name="nama" value="<?php echo $nama; ?>"><br>
	Alamat :<br>
	<input type="text" name="alamat" value="<?php echo $alamat; ?>"><br><br>
	Hobi :<br>
	<input type="text" name="hobi" value="<?php echo $hobi; ?>"><br><br>
	<input type="submit" value="Simpan" name="isian"> <input type="reset" value="Reset">
		<input type="hidden" name="no" value=<?php echo $no; ?>></form>
		<?php
}
?>
	<a href="edit.php">Klik disini</a> untuk kembali ke Menu Edit.
	</body>
	</html>