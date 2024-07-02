<?php

require '../conexion.php';

$usuario = $_POST['username'];
$contraseña = $_POST['password'];


if($usuario){
 	if($contraseña){
		 $sql="SELECT * FROM administrador WHERE usuario='$usuario' and contrasena='$contraseña'";
		 $resultado = $enlace->query($sql);
		     if($resultado->num_rows>0){
		       	while ($row=$resultado->fetch_assoc()) {

		       		header('Location: mainAdmin.php');		}
		     }else{
		     	//agregar aquí si el login no es correcto
		     	echo '<script language="javascript">';
				echo 'alert("Usuario o Contraseña Incorrecto")';
				echo '</script>';
				
		     }
		    
		    $enlace->close();
 	}
 }

?>