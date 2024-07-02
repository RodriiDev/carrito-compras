<?php 
session_start();
include('header.php');?>

<body>

<div class="container">  
  
  <div id="cajaInicio" class="mainbox col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3"> <!--Offset desplaza columnas-->   
    <div class="panel panel-info">
      <div class="panel-heading">
        <div class="panel-title">Iniciar Sesión</div>
      </div>     

    <div class="panel-body">
                        
        <form id="loginform" class="form-horizontal" role="form" action="loginCheck.php" method="POST">
                                    
          <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
            <input id="login-username" type="text" class="form-control" name="username" value="" placeholder="Email">                                        
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

          <div class="form-group">
            <div class="col-md-12 control">
              <div class="count">¿No tienes cuenta?</div>
              <div class="btnRegister">
              	<a href="#" onClick="$('#cajaInicio').hide(); $('#cajaRegistro').show()">Registrate aquí</a>
              </div>
            </div>
          </div>    
        </form>     
    </div>                     
    </div>  
  </div>

	<!--******************************************Registro****************************************************-->

  <div id="cajaRegistro" class="mainbox2 col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
    <div class="panel panel-info">
      <div class="panel-heading">
        <div class="panel-title">Crear Cuenta</div>
        <div class="signlink"><a id="signinlink" href="#" onclick="$('#cajaRegistro').hide(); $('#cajaInicio').show()">Iniciar Sesión</a></div>
      </div>  
                        
      <div class="panel-body" >

        <form id="signupform" class="form-horizontal" role="form" action="altaUsuario.php" method="POST">                  
            
          <div class="form-group">
            <label for="firstname" class="col-md-3 control-label">Nombre</label>
            <div class="col-md-9">
              <input type="text" class="form-control" name="nombre" placeholder="Escribe tu nombre" maxlength="35" required>
            </div>
          </div>
          <div class="form-group">
            <label for="lastname" class="col-md-3 control-label">Apellidos</label>
            <div class="col-md-9">
              <input type="text" class="form-control" name="apellidos" placeholder="Escribe tus apellidos" maxlength="150" required>
            </div>
          </div>
          <div class="form-group">
            <label for="email" class="col-md-3 control-label">Correo Electrónico</label>
            <div class="col-md-9">
              <input type="text" class="form-control" name="email" placeholder="Dirección de correo" maxlength="60" required>
            </div>
          </div>  
          <div class="form-group">
            <label for="password" class="col-md-3 control-label">Contraseña</label>
            <div class="col-md-9">
              <input type="password" class="form-control" name="pass" placeholder="Contraseña" maxlength="20" required>
            </div>
          </div> 
          <div class="form-group">
            <label for="password" class="col-md-3 control-label">Confirmar Contraseña</label>
            <div class="col-md-9">
              <input type="password" class="form-control" placeholder="Contraseña" maxlength="20" required>
            </div>
          </div>     
          <div class="form-group">
            <label for="icode" class="col-md-3 control-label">Teléfono</label>
            <div class="col-md-9">
              <input type="text" class="form-control" name="tel" placeholder="(000)-000-00-00" maxlength="15" required>
            </div>
          </div>
          <div class="form-group">                              
            <div class="col-md-offset-3 col-md-9 controls">
              <button type="submit" class="btn btn-info" id="btn-signup">Registrar</button>
            </div>
          </div>                       
        </form>
      </div>
    </div>              
  </div> 
</div>

<?php include('footer.php');?>
</body>
