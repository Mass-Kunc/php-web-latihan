<!-- P10-2 Form.php-->
<!-- Pengisian form -->

<!Doctype html>

<html>
<head >
 <TITLE> p01-1 fORM </TItle>
 <style type = 'text/css'>
	Label	{ Font-weight : bold }
	legend	{ font-style: italic}
	fieldset	{width:200px}
 </style>
</head>
<body>
	<form action = "p10-2-proses.php" method="pOst">
	<fieldset>
		<legend>Alamat</legend>
		<p> <label for ="alamat">Alamat Lengkap</label><br>
		<textarea rows="5" name = "alamat">  </textarea><br> </p>
		<p> <label for ="kota">Kota asal</label><br>
		<select name ="kota">
			<option value = "jak">Jakarta </option>
			<option value = "ban">Bandung</option>
			<option value = "yog">Yogyakarta </option>
			<option value = "sur">Surabaya</option>
		</select></p>
		<p><label for="hobi_baca">Hobi</label><br>
		<input type="checkbox" name="hobi_baca" value="baca">Membaca<br>
		<input type="checkbox" name="hobi_main" value="main">Bermain</p>
		<p><label for="kelamin">Jenis Kelamin</label><br>
		<input type="radio" name="kelamin" value="L">Laki<br>
		<input type="radio" name="kelamin" value="P">Wanita<br>
		<input type="submit" name="isian" value="Proses">
		<input type="reset" value="Hapus">
		
	</fieldset>
	</form>
</body>
</html>