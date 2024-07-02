<?php

    $host='ftp.rodrigoshop1.16mb.com';
    $user='u924722941';
    $pass='rodrigosoto1';
    require_once '../conexion.php';

    $product=$_POST['nomProducto'];
    $marca=$_POST['brand'];
    $code=$_POST['code'];
    $precio=$_POST['price'];
    $categoria=$_POST['cat'];
    
    
    $conexion = ftp_connect($host) or die("Cannot login");
    $login = ftp_login($conexion,$user,$pass);

    if((!$conexion) && (!$login)){
        echo ('Error');
    }else{
        $temp = explode(".",$_FILES['image']['name']);
        $sources_file = $_FILES['image']['tmp_name'];
        $destino = "/public_html/img/products/".strtolower($categoria);
        $nombre = $_FILES['image']['name'];
        ftp_pasv($conexion,true);

        $subido = ftp_put($conexion,$destino."/".$nombre,$sources_file,FTP_BINARY);

        if($subido){

          
           

        }else{
            
            echo("ERROR al subir producto") ;
           
        }           
    }

    ftp_close($conexion);

    $url ="http://rodrigoshop1.16mb.com/img/products/".strtolower($categoria)."/".$nombre;



    $buscarProduct = "SELECT * FROM `productos` WHERE product_code = '$code' ";

    $result = $enlace->query($buscarProduct);
   
    $count = mysqli_num_rows($result);
   
    if ($count == 1) {
    echo "<br />". "El codigo del Producto ya existe, por favor Ingresa otro producto diferente." . "<br />";
    }

    else{
   
    $sql = "INSERT INTO `productos`(`product_name`, `product_brand`, `product_code`, `product_image`, `product_price`,`categoria`) VALUES ('$product', '$marca', '$code', '$url', '$precio', '$categoria')";


        if($enlace -> query($sql) === TRUE){
        header("Location: agregarProducto.php");
        }
        else {
        echo "Error al crear el producto." . $query . "<br>" . $enlace->error; 
        }
    }

    mysqli_close($enlace);

?>