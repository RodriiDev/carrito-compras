<!DOCTYPE html>
<html lang="es-MX">
  <head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    
    <title>Admin Carrito</title>
    <!--Css-->
    <link rel="stylesheet" type="text/css" href="../css/sesionStyle.css">
    <link rel="stylesheet" type="text/css" href="../css/adminStyle.css">

    <!--Links Bootstrap--> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">     
    <!--jquery-->
    <script src="../js/jquery.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <!--Scripts-->
 
</head>

<body>

<div class="container">  
  
  <div id="cajaInicio" class="mainbox col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3"> <!--Offset desplaza columnas-->   
    <div class="panel panel-info">
      <div class="panel-heading">
        <div class="panel-title">Iniciar Sesión Admin</div>
      </div>     

    <div class="panel-body">
                        
        <form id="loginform" class="form-horizontal" role="form" action="loginCheckAdmin.php" method="POST">
                                    
          <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
            <input id="login-username" type="text" class="form-control" name="username" value="" placeholder="Usuario">                                        
          </div>
                                
          <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
            <input id="login-password" type="password" class="form-control" name="password" placeholder="Contraseña">
          </div>
                                         
          <div class="form-group">                             
            <div class="col-sm-12 controls">
              <button type="submit" class="btn btn-success" id="btn-login">Iniciar Sesión</button>
            </div>
          </div>
 
        </form>     
    </div>                     
    </div>  
  </div>
</div>

<?php include('footerAdmin.php');?>
</body>

</html>