<?php

    require 'conexion.php';  
    $nombre=utf8_encode($_POST['nom']);
    $apellidos=utf8_encode($_POST['apellidos']);
    $email=utf8_encode($_POST['us']);
    $tel=utf8_encode($_POST['tel']);
    $usOriginal=utf8_encode($_POST['usOriginal']);


    $sql="UPDATE usuarios SET usuario = '$email',nombre = '$nombre', apellidos ='$apellidos',telefono = $tel = WHERE usuario = '$usOriginal'";


    if($enlace->query($sql)){
        header("Location: perfil.php?us=$email&actual=Cambios guardados...");
    }else{
        echo "Error: ".$sql." <br />".$enlace -> error;
    }
    $enlace->close();

?>