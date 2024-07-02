<?php
  
  require 'conexion.php';
  
  if(!$enlace) {
    echo 'ERROR: No se puede conectar a la base de datos';
  } else {
  
    if(isset($_POST['queryString'])) {
      $queryString = $enlace->real_escape_string($_POST['queryString']);
      
      if(strlen($queryString) >0) {
        
        $query = $enlace->query("SELECT product_name FROM productos WHERE product_name LIKE '$queryString%' LIMIT 10");
        if($query) {
       
          while ($result = $query ->fetch_object()) {
    
                echo '<li onClick="fill(\''.$result->product_name.'\');">'.$result->product_name.'</li>';
              }
        } else {
          echo 'ERROR: Hay un problema';
        }
      } else {
        
      } 
    } else {
      echo 'No debe haber acceso directo a este script';
    }
  }
?>