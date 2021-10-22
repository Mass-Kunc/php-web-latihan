<!DOCTYPE html>
<!-- file: isi.php -->
<html>
<head>
	<title> Form Isian Buku Tamu </title>
	<style type = "text/css">
		label		{font-weight: bold }
		legend		{font-style:italic }
		fieldset 	{width : 210px}
	</style>
</head>
<body>
	<form name ="bukutamu" method ="post" action="simpan.php">
<fieldset>
	<legend> Mengisi Buku Tamu</legend>
	<p><label for ="nama"> Nama</label><br>
	<input type ="text" size="20" name="nama"></p>
	<p><label for ="alamat"> Alamat</label><br>
	<input type ="text" size="28" name="alamat"></p>
	<p><label for ="komentar"> komentar</label><br>
	<input textarea name="komentar"></p>
	<input type ="submit" value= "OK"name="isian">
	<input type ="reset" value="Hapus">
</fieldset>
</form>
<a href="iindex.php">Klik disini</a> untuk kembali ke menu utama.
</body>
</html>
