<!-- .php-->
<!--  -->

<!Doctype html>

<html>
<head >
 <TITLE> p01-1 fORM </TItle>
 <style type = 'text/css'>
	Label	{ Font-weight : bold }
	legend	{ font-style: italic}
	.boxa { margin-left:200px; margin-top :-70px;}
	.boxb {margin-left:550px; margin-top :-40px;}
	.boxc {margin-left:200px;margin-top:-54px;}
	fieldset	{width:200px}
 </style>
</head>
<body>
	<form action = "11.0830-proses.php" method="POst">
	<fieldset>
		<legend>Identitas Calon Mahasiswa</legend>
		<p> <label for ="nama">Nama Lengkap</label><br>
		<input type ="text" size = 20" name = "nama"> </p>
		<p><b> Masukkan Nama Lengkap Anda Sesuai Akta Kelahiran yang Berlaku </b></p>
		
		<p><label for="kelamin">Jenis Kelamin</label><br>
		<input type="radio" name="kelamin" value="Laki">Laki-Laki<br>
		<input type="radio" name="kelamin" value="Wanita">Wanita
		
		<div class = "boxa">
		<label for ="tempat">Tempat Lahir</label><br>
		<input type = 'text' size = '30' name = "tempat"></input>
		</div>
		
		<div class = "boxb">
		<label for ="tanggal">Tanggal Lahir</label><br>
		<input type = 'text' size = '30' name = "tanggal"></input>
		</div>
		
		</br>
		
		<p> <label for ="agama">Agama</label><br>
		<select name ="agama">
			<option value = "islam">Islam</option>
			<option value = "kris">Kristen</option>
			<option value = "bud">Budha </option>
			<option value = "hin">Hindu</option>
			<option value = "kong">Konghucu</option>
		</select></p>
				
		<div class = "boxc">
		<p> <label for ="kn">Kewarganegaraan</label><br>
		<select name ="kn">
			<option value = "wni">Warga Negara Indonesia</option>
			<option value = "wna">Warga Negara Asing</option>
		</select></p>
		</div>
		
		<p> <label for ="alamat">Alamat Lengkap</label><br>
		<textarea rows="3" cols = "93" name = "alamat">  </textarea><br> </p>
		
		<input type="submit" name="isian" value="Submit">
		
 
	</fieldset>
	</form>
</body>
</html>