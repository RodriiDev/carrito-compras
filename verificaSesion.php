<?php 

	require 'conexion.php';

	if(isset($_COOKIE["usuario"])){

	header('Location: direccion.php');
	
	}

	else{

	header('Location: iniciarSesion.php');

	}
?>
