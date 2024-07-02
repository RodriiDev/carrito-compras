
<!DOCTYPE html>
<html lang="es-MX">
  <head>
  	<meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  	
    <title>Carrito</title>
    <!--Css-->
    <link rel="stylesheet" type="text/css" href="css/estilos.css"> 
    <link rel="stylesheet" type="text/css" href="css/style2.css">
    <link rel="stylesheet" type="text/css" href="css/sesionStyle.css">
    <!--Links Bootstrap--> 
    
    <link rel="stylesheet" type="text/css" href="css/bootstrap-theme.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

    <link rel="stylesheet" href="fonts/glyphicons-halflings-regular.ttf">

    <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" rel="stylesheet" type="text/css">
   
    <!--jquery-->
    <script src="js/jquery.js"></script>

    <!--Scripts-->
    <script type="text/javascript" src="js/scripts.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!--<script src="js/bootstrap.js"></script>-->
    <!--<script src="js/npm.js"></script>-->
    <script src="js/search.js"></script>
    <script src="js/carrito.js"></script>

    
</head>


<!--*****************************************Nav******************************************************-->

  <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed"  data-toggle="collapse" data-target="#navbar">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      </button>
       <a class="navbar-brand" href="index.php">INICIO</a>
    </div>
  
  <div id="navbar" class="navbar-collapse collapse">


    <ul class="nav navbar-nav">
     
      <li class="dropdown mega-dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">HOMBRE<span class="caret"></span></a>        
        <ul class="dropdown-menu mega-dropdown-menu">
          <li class="col-sm-3">
            <ul>
              <li ><a class="dropdown-header">Calzado<a></li>
              <li><a href="productos.php?cat=1">Correr</a></li>
              <li><a href="productos.php?cat=2">Futbol</a></li>
              <li><a href="productos.php?cat=3">Basquetbol</a></li>
              <li><a href="productos.php?cat=4">Entrenamiento</a></li>
            </ul>
          </li>
          <li class="col-sm-3">
            <ul>
              <li><a class="dropdown-header">Ropa<a></li>
              <li><a href="productos.php?cat=5">Playeras</a></li>
              <li><a href="productos.php?cat=6">Jerseys</a></li>    
              <li><a href="productos.php?cat=7">Pantalones y Shorts</a></li>                    
              <li><a href="productos.php?cat=8">Chamarras y Sudaderas</a></li>                                     
            </ul>
          </li>
          <li class="col-sm-3">
            <ul>
              <li><a class="dropdown-header">Accesorios<a></li>
              <li><a href="productos.php?cat=9">Mochilas</a></li>
              <li><a href="productos.php?cat=10">Botellas</a></li>
              <li><a href="productos.php?cat=11">Relojes</a></li>
            </ul>
          </li>
        </ul>       
      </li>

      <li class="dropdown mega-dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">MUJER<span class="caret"></span></a>        
        <ul class="dropdown-menu mega-dropdown-menu">
          <li class="col-sm-3">
            <ul>
              <li><a class="dropdown-header">Calzado<a></li>
              <li><a href="productos.php?cat=12">Futbol</a></li>
              <li><a href="productos.php?cat=13">Correr</a></li>
              <li><a href="productos.php?cat=14">Entrenamiento</a></li>
              <li><a href="productos.php?cat=15">Sandalias</a></li>
            </ul>
          </li>
          <li class="col-sm-3">
            <ul>
              <li><a class="dropdown-header">Ropa<a></li>
              <li><a href="productos.php?cat=16">Playeras y Blusas</a></li>
              <li><a href="productos.php?cat=17">Leggins y Shorts</a></li>
              <li><a href="productos.php?cat=18">Jerseys</a></li>                            
              <li><a href="productos.php?cat=19">Sudaderas</a></li>                                     
            </ul>
          </li>
          <li class="col-sm-3">
            <ul>
              <li><a class="dropdown-header">Accesorios<a></li>
              <li><a href="productos.php?cat=20">Mochilas</a></li>
              <li><a href="productos.php?cat=21">Botellas</a></li>
              <li><a href="productos.php?cat=22">Relojes</a></li>
            </ul>
          </li>
        </ul>       
      </li>

      <li class="dropdown mega-dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">NIÑOS<span class="caret"></span></a>        
        <ul class="dropdown-menu mega-dropdown-menu">
          <li class="col-sm-3">
            <ul>
              <li><a class="dropdown-header">Calzado<a></li>
              <li><a href="productos.php?cat=23">Futbol</a></li>
              <li><a href="productos.php?cat=24">Entrenamiento</a></li>
            </ul>
          </li>
          <li class="col-sm-3">
            <ul>
              <li><a class="dropdown-header">Ropa<a></li>
              <li><a href="productos.php?cat=25">Playeras y Jerseys</a></li>
              <li><a href="productos.php?cat=26">Pantalones y Shorts</a></li>
              <li><a href="productos.php?cat=27">Chamarras y Sudaderas</a></li>                                      
            </ul>
          </li>
          <li class="col-sm-3">
            <ul>
              <li><a class="dropdown-header">Accesorios<a></li>
              <li><a href="productos.php?cat=28">Gorras</a></li>
            </ul>
          </li>
        </ul>       
      </li>  
    </ul> 

  <ul class="nav navbar-nav navbar-right">

  <!--*************************Busqueda********************************-->

    <li>
    <div class="col-sm-8 col-md-10 col-lg-12">
        <form class="navbar-form" method="POST" action="busquedaHecha.php" >
        <div class="input-group">
            <input type="text" class="form-control" placeholder="Busqueda" name="q" id="inputString" onkeyup="lookup(this.value);" onblur="fill();">
            <div class="input-group-btn">
                 <button class="btn btn-primary" type="submit"><i class="fa fa-search"></i></button>
            </div>
        </div>
        </form>

        <ul>
        <div class="suggestionsBox" id="suggestions" style="display: none;">
        <div class="suggestionList" id="autoSuggestionsList">
          &nbsp;
        </div>
        </div>
        </ul>
    </div>
       
    </li>
    
    
    <!--************************************** Sesion****************************** -->

    <?php
    if(isset($_COOKIE["usuario"])){
                ?>
                  <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#"><?php echo $_COOKIE['usuario'];?>
                    <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                      <li><a id="cerrarSesion" href="salir.php">Cerrar sesión</a></li>
                    </ul>
                  </li>  
              
                <?php
              }else{  
                ?>
                  <li>
                    <a href="iniciarSesion.php">
                    <i class="fa fa-user"></i>Iniciar Sesión
                    </a>  
                  </li>
                <?php   
              }
    ?>

    <!--***********************************Carrito*************************************************-->

    <li class="dropdown1">
    
      <a class="dropdown-toggle cart-box" data-toggle="dropdown" role="button" id="cart-info">

      <?php
      if(isset($_SESSION["products"])){ 
        echo count($_SESSION["products"]); 
      }

      else{
        echo 0; 
      }

      ?>

     </a>


      <ul class="dropdown-menu shopping-cart-box" role="menu">
        <div id="shopping-cart-results"></div>
      </ul>
    </li>
  
  </ul>

  </div>
  </div>
  </nav>
 
  
</html>