<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Bloqueando páginas por sessão</title>

	<?php 
       date_default_timezone_set("America/Sao_Paulo");

	session_start();

	$_SESSION["nome2"] = $_POST["nome2"];
	$_SESSION["idade2"] = $_POST["idade2"];
	$_SESSION["peso2"] = $_POST["peso2"];
	$_SESSION["altura2"] = $_POST["altura2"];

	
	  ?>
</head>
<body>
	<h1> PESSOA 1: </h1>
<b>nome: </b> <?php echo $_SESSION["nome1"]; ?>, pessoa 1 </br>
<b>idade: </b> <?php echo $_SESSION["idade1"]; ?>, pessoa 1 </br>
<b>peso: </b> <?php echo $_SESSION["peso1"]; ?>, pessoa 1 </br>
<b>altura: </b> <?php echo $_SESSION["altura1"]; ?>, lpessoa 1 </br>

<h1> PESSOA 2: </h1>
<b>nome: </b> <?php echo $_SESSION["nome2"]; ?>, pessoa 2 </br>
<b>idade: </b> <?php echo $_SESSION["idade2"]; ?>, pessoa 2 </br>
<b>peso: </b> <?php echo $_SESSION["peso2"]; ?>, pessoa 2 </br>
<b>altura: </b> <?php echo $_SESSION["altura2"]; ?>, pessoa 2 </br>

<h1>COMPARAÇÃO: </h1>

<?php 


if ($_SESSION["altura1"]>=$_SESSION["altura2"]) {
	
	$alturamaior = $_SESSION["altura1"];
}else {
	$alturamaior = $_SESSION["altura2"];
	
}
if($_SESSION["idade1"]>= $_SESSION["idade2"]){

	$idademaior = $_SESSION["idade1"];
}else{
	$idademaior = $_SESSION["idade2"];
}
if ($_SESSION["peso1"]>= $_SESSION["peso2"]) {
	$pesomaior = $_SESSION["peso1"];
}else{
	$pesomaior= $_SESSION["peso2"];
}


echo "$idademaior";
echo "$alturamaior";
echo "$pesomaior";

 ?>
</body>
</html>