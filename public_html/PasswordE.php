<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title>Christian Scheub</title>
</head>
<body>
    <h1> Ihr Passwort wurde geprüft! </h1>
    
	<?php
	 $passwort = $_POST['password']; // Passwort
	 if($passwort == "test01"){
	 	 echo "<p> Gratulation! Das Passwort war richtig. Sie werden nun zu meinem Lebenslauf weitergeleitet. </p>";
	 }
	if($passwort <> "test01"){
	 	 echo "<p> Fehler! </p>";
	}


	?>
</body>
</html>