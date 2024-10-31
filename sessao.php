<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Testando sessões</title>
</head>
<body>
	<?php 

	session_start();

	$_SESSION['nome'] ="Administrador";


	//elimina TODAS as variáveis de sessão, mas mantém a sessão ativa
	//session_unset();
	
	//elimina TODA a sessão
	///session_destroy();

	

 ?>

 <h3>Sessão de Usário</h3>

 SID desta sessão é: <?php ECHO session_id();?>

 
  Bem Vindo, Sr. <?php echo $_SESSION['nome']; ?>
</body>
</html>

