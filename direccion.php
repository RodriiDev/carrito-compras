<?php 
session_start();
include('header.php');
?>

<div class="container">  
  
  <div id="cajaInicio" class="mainbox col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3"> <!--Offset desplaza columnas-->   
    <div class="panel panel-info">
      <div class="panel-heading">
        <div class="panel-title">Dirección de Envío</div>
      </div>     

    <div class="panel-body">
                        
        <form class="form-horizontal" role="form" action="index.php" method="POST"  enctype="multipart/form-data">
                                    
        	<div class="form-group">
            <label class="col-md-3 control-label">Calle</label>
            <div class="col-md-9">
              <input type="text" class="form-control" name="nomCalle" placeholder="Escribe el nombre de la calle" maxlength="60" required>
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-3 control-label">Numero</label>
            <div class="col-md-9">
              <input type="text" class="form-control" name="numCasa" placeholder="Escribe el numero de tu casa" maxlength="5" required>
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-3 control-label">Colonia</label>
            <div class="col-md-9">
              <input type="text" class="form-control" name="colonia" placeholder="Escribe la colonia o el fraccionamiento" maxlength="35" required>
            </div>
          </div>

          <div class="form-group">
            <label class="col-md-3 control-label">Codigo Postal</label>
            <div class="col-md-9">
              <input type="text" class="form-control" name="codigo" placeholder="Escribe su codigo postal" maxlength="35" required>
            </div>
          </div>

          <div class="form-group">
            <label class="col-md-3 control-label">Ciudad</label>
            <div class="col-md-9">
              <input type="text" class="form-control" name="price" placeholder="Escribe su ciudad" maxlength="35" required>
            </div>
          </div>

          <div class="form-group">
            <label class="col-md-3 control-label">Estado</label>
            <div class="col-md-9">
              <input type="text" class="form-control" name="price" placeholder="Escribe su estado" maxlength="35" required>
            </div>
          </div>
                                         
          <div class="form-group">                             
            <div class="col-sm-12 controls">
              <input class="btn btn-primary btn-sm btn-lg btn3d" type="submit" value="Finalizar Compra" onclick='alert("Su compra se ha realizado con exito!! Su pedido esta en proceso :)")'> <!--Button-->
            </div>
          </div>

        </form>     
    </div>                     
    </div>  
  </div>

</div>
<?php

include('footer.php');

?>
</body>