<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<link type="text/css" href="style.css" rel="stylesheet">
</head>

<body>

<?php
	$dbc = mysqli_connect('localhost','root','','phpbok')
	or die ('error1');
	$overskrift = $_POST['overskrift'];
	$nyhete = $_POST['nyhete'];
	$forfather = $_POST['forfather'];
	$query = "INSERT INTO nyheter(overskrift,nyhete,forfather)
	VALUES ('$overskrift','$nyhete','$forfather')";
	mysqli_query($dbc,$query)
	or die('error2');
	echo 'SUCCESSFULLY INSERTED';
	echo '<h1>Register en ny nyhet</h1>';	
	echo '<p class="text">overskrift son nyheten skla ha:</p>';
	echo  $overskrift;
	echo '<p class="text">Skriv inn selve nyheten:</p>';
	echo $nyhete. '<br><br>';
	echo $forfather;
	
	
	mysqli_close($dbc);
?>

</body>
</html>
