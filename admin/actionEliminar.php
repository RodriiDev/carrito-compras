<?php

    require '../conexion.php';

    $code=$_POST['codigo'];

    $buscarProduct = "SELECT * FROM `productos` WHERE product_code = '$code' ";

    $result = $enlace->query($buscarProduct);
   
    $count = mysqli_num_rows($result);
   
    if ($count == 1) {

        $sql = "DELETE FROM `productos` WHERE product_code = '$code' ";


        if($enlace -> query($sql) === TRUE){
        header("Location: agregarProducto.php");
        }
    }

    else{
            echo "<br />". "Ese código de producto no existe" . "<br />";    
    }

    mysqli_close($enlace);

?>