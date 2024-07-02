<?php
include("headerAdmin.php");
?>

<body>
  
<div class="container">  
  
  <div id="cajaInicio" class="mainbox10 col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3"> <!--Offset desplaza columnas-->   
    <div class="panel panel-info">
      <div class="panel-heading">
        <div class="panel-title">Eliminar un Usuario</div>
      </div>  
      </div>     

    <div class="panel-body">
                        
        <form class="form-horizontal" role="form" action="actionDelete.php" method="POST" enctype="multipart/form-data">
                                    
          <div class="form-group">
            <label class="col-md-3 control-label">Nombre del Usuario</label>
            <div class="col-md-9">
              <input type="text" class="form-control" name="user" placeholder="Escribe el nombre del usuario(email) a eliminar" maxlength="35" required>
            </div>
          </div>
                                         
          <div class="form-group">                             
            <div class="col-sm-12 controls">
              <button class="btn btn-danger" type="submit">Eliminar Usuario</button>     <!--Button-->
            </div>
          </div>

        </form>     
    </div>                     
    </div>  
  </div>



</div>

<?php include("footerAdmin.php"); ?>

</body>