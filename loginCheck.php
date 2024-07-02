<!--<?php
//session_start();
?>
-->

<?php

require 'conexion.php';

$usuario = $_POST['username'];
$contraseña = $_POST['password'];


if($usuario){
 	if($contraseña){
 		 $cookie_name = "usuario";
		 $sql="SELECT * FROM usuarios WHERE usuario='$usuario' and contrasena='$contraseña'";
		 $resultado = $enlace->query($sql);
		     if($resultado->num_rows>0){
		       	while ($row=$resultado->fetch_assoc()) {
		       		$cookie_value = $row['usuario'];
		       		setcookie($cookie_name,$cookie_value,time()+(86400*5),"/");
		       		header('Location: index.php');		       	}
		     }else{
		     	//agregar aquí si el login no es correcto
		     	echo ('error');
		     }
		    
		    $enlace->close();
 	}
 }

?>