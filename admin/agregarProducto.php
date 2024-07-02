<?php
include("headerAdmin.php");
?>

<body>
	
<div class="container">  
  
  <div id="cajaInicio" class="mainbox10 col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3"> <!--Offset desplaza columnas-->   
    <div class="panel panel-info">
      <div class="panel-heading">
        <div class="panel-title">Agrega un Producto</div>
      </div>  
      </div>     

    <div class="panel-body">
                        
        <form class="form-horizontal" role="form" action="actionAgregar.php" method="POST" enctype="multipart/form-data">
                                    
        	<div class="form-group">
            <label class="col-md-3 control-label">Nombre del Producto</label>
            <div class="col-md-9">
              <input type="text" class="form-control" name="nomProducto" placeholder="Escribe el nombre del producto" maxlength="35" required>
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-3 control-label">Marca del Producto</label>
            <div class="col-md-9">
              <input type="text" class="form-control" name="brand" placeholder="Escribe la marca" maxlength="150" required>
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-3 control-label">Código del Producto</label>
            <div class="col-md-9">
              <input type="text" class="form-control" name="code" placeholder="Escribe un codigo para el producto ej:AD1" maxlength="35" required>
            </div>
          </div>

          <div class="form-group">
            <label class="col-md-3 control-label">Categoria</label>
            <div class="col-md-9">
              <select name="cat">
                <option selected value="0"> Elige una categoria </option>
                <optgroup label="Hombre"> 
                  <option value="1">Calzado Correr</option> 
                  <option value="2">Calzado Futbol</option> 
                  <option value="3">Calzado Basquetbol</option>
                  <option value="4">Calzado Entrenamiento</option> 
                  <option value="5">Ropa Playeras</option> 
                  <option value="6">Ropa Jerserys</option> 
                  <option value="7">Ropa Pantalones</option>
                  <option value="8">Ropa Sudaderas</option>
                  <option value="9">Accesorios Mochilas</option> 
                  <option value="10">Accesorios Botellas</option>
                  <option value="11">Accesorios Relojes</option>
                </optgroup> 

                <optgroup label="Mujer"> 
                  <option value="12">Calzado Futbol</option> 
                  <option value="13">Calzado Correr</option>
                  <option value="14">Calzado Entrenamiento</option> 
                  <option value="15">Calzado Sandalias</option>
                  <option value="16">Ropa Playeras</option>  
                  <option value="17">Ropa Leggins</option>
                  <option value="18">Ropa Jerserys</option>
                  <option value="19">Ropa Sudaderas</option>
                  <option value="20">Accesorios Mochilas</option> 
                  <option value="21">Accesorios Botellas</option>
                  <option value="22">Accesorios Relojes</option>
                </optgroup> 

                <optgroup label="Niños">  
                  <option value="23">Calzado Futbol</option> 
                  <option value="24">Calzado Entrenamiento</option> 
                  <option value="25">Ropa Playeras</option> 
                  <option value="26">Ropa Pantalones</option>
                  <option value="27">Ropa Sudaderas</option>
                  <option value="28">Accesorios Gorras</option> 
                </optgroup> 
              </select>
            </div>
          </div>

          <div class="form-group">
            <label class="col-md-3 control-label">Imagen</label>
            <div class="col-md-9">
              <input name="image" type="file" />
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-3 control-label">Precio</label>
            <div class="col-md-9">
              <input type="text" class="form-control" name="price" placeholder="Escribe el precio del Producto" maxlength="35" required>
            </div>
          </div>
                                         
          <div class="form-group">                             
            <div class="col-sm-12 controls">
            <input class="btn btn-success" type="submit" value="Agregar Producto" onclick='alert("Producto Añadido")'>

            </div>
          </div>

         
            <div class="col-md-12 control">
              <div class="count"></div>
               <div class="form-group">
          <div class="panel panel-info">
      <div class="panel-heading">
        <div class="panel-title">Eliminar un Producto</div>
      </div>  
      </div>  
              <div class="btnRegister">
                <a href="#" onClick="$('#cajaInicio').hide(); $('#cajaEliminar').show()">Elimina cualquier producto aquí</a>
              </div>
            </div>
          </div>

        </form>     
    </div>                     
    </div>  
  </div>

  <!-- ***************************Eliminar Producto************************* -->

  <div id="cajaEliminar" class="mainbox2 col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
    <div class="panel panel-info">
      <div class="panel-heading">
        <div class="panel-title">Eliminar Producto</div>
        <div class="signlink"><a id="signinlink" href="#" onclick="$('#cajaEliminar').hide(); $('#cajaInicio').show()">Agregar Producto</a></div>
      </div>  
                        
      <div class="panel-body">

        <form id="signupform" class="form-horizontal" role="form" action="actionEliminar.php" method="POST">                        
          <div class="form-group">
            <label for="firstname" class="col-md-3 control-label">Codigo del producto</label>
            <div class="col-md-9">
              <input type="text" class="form-control" name="codigo" placeholder="Ingresa el codigo del producto a elminar ej: AA1" maxlength="35" required>
            </div>
          </div>         
          <div class="form-group">                              
            <div class="col-md-offset-3 col-md-9 controls">
              <button type="submit" class="btn btn-danger" id="btn-signup">Eliminar</button>
            </div>
          </div>                       
        </form>
      </div>
    </div>              
  </div> 

</div>

<?php include("footerAdmin.php"); ?>

</body>