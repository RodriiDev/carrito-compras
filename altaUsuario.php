<?php

    $nombre=utf8_encode($_POST['nombre']);
    $apellidos=utf8_encode($_POST['apellidos']);
    $email=utf8_encode($_POST['email']);
    $pss=utf8_encode($_POST['pass']);
    $tel=utf8_encode($_POST['tel']);
    $fecha_alta=date("Y/m/d");
   
    require 'conexion.php';


    $buscarUser = "SELECT * FROM `usuarios` WHERE usuario = '$email' ";

    $result = $enlace->query($buscarUser);
   
    $count = mysqli_num_rows($result);
   
    if ($count == 1) {
    echo "<br />". "El Nombre de Usuario ya ha sido tomado." . "<br />";
    echo "<a>Por favor escoga otro Nombre</a>";
    }

    else{
   
    $sql = "INSERT INTO `usuarios`(`usuario`, `contrasena`, `nombre`, `apellidos`, `telefono`, `fechaalta`) VALUES ('$email', '$pss', '$nombre', '$apellidos', '$tel', '$fecha_alta')";


        if($enlace -> query($sql) === TRUE){
        header("Location: iniciarSesion.php");
        }
        else {
        echo "Error al crear el usuario." . $query . "<br>" . $enlace->error; 
        }
    }

    mysqli_close($enlace);

?>