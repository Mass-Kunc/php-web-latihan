<!-- P10-1 Form.php-->
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
	<form action = "P10-1-proses.php" method="pOst">
	<fieldset>
		<legend> Pengisian Form</legend>
		<p> <label for ="username"> Username</label><br>
		<input type ="text" size = 20" name = "username"><br> </p>
		<p> <label for ="email"> Email</label> <br>
		<input type ="text" size = 20" name = "email"><br> </p>
		<p> <label for ="Pass"> Password</label> <br>
		<input type ="Password" size = 20" name = "pass"><br> </p>
		<input type ="sUbmit" value ="proses" name = "isian">   <br>
		<input type ="reset" value ='Hapus'>
	</fieldset>
	</form>
</body>
</html>