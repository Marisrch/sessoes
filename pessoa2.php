<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>pessoa 2</title>
</head>
<body>
<form name="logar" method="post" action="salvando1.php">
			Nome2: 
			<input type="text" name="nome2"> <br>
			Idade:
			<input type="number" name="idade2"> <br>
			peso:
			<input type="float" name="peso2"> <br>
			altura:
			<input type="float" name="altura2"> <br>
			
			<input type="submit" name="enviar2" value="Enviar">


		<?php  	session_start();

	$_SESSION["nome1"] = $_POST["nome1"];
	$_SESSION["idade1"] = $_POST["idade1"];
	$_SESSION["peso1"] = $_POST["peso1"];
	$_SESSION["altura1"] = $_POST["altura1"];
	?>
		</form>
</body>
</html>