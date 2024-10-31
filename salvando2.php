<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Salva</title>
	<?php 

	<?php
global $wppa;
$wppa = array( 'elm1' => 'value1', 'elm2' => 'value2', ....etc...);

if ( ! session_id() ) @ session_start();
if ( ! isset($_SESSION['wppa']) $_SESSION['wppa'] = array();

if ( ! isset($_SESSION['wppa']['album']) ) $_SESSION['wppa']['album'] = array();
$_SESSION['wppa']['album'][1234] = 1;

$wppa['elm1'] = 'newvalue1';

print_r($_SESSION); 
?>

	 ?>
</head>
<body>

</body>
</html>