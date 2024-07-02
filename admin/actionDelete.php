<?php

    require '../conexion.php';

    $usuario=$_POST['user'];

    $buscarProduct = "SELECT * FROM `usuarios` WHERE usuario = '$usuario' ";

    $result = $enlace->query($buscarProduct);
   
    $count = mysqli_num_rows($result);
   
    if ($count == 1) {

        $sql = "DELETE FROM `usuarios` WHERE usuario = '$usuario' ";


        if($enlace -> query($sql) === TRUE){
        header("Location: usuariosEdit.php");
        }
    }

    else{
            echo "<br />". "Ese usuario no existe" . "<br />";    
    }

    mysqli_close($enlace);

?>