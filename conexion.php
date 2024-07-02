 <?php
 
	$enlace = new mysqli("localhost", "root", "root", "cart_php");

	$currency = '$'; 
	$shipping_cost	= 150; 

    if($enlace -> connect_error){
        die("Conexión fallida: ".$enlace -> connect_error); //die mata todos los procesos y muestra el error en pantalla
    }
    //echo "Conexión exitosa";
  return $enlace;  
?>	