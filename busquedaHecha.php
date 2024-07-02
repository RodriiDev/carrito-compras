<?php
session_start(); //start session
include("conexion.php");
include("header.php");


$nameBusca=utf8_encode($_POST['q']); 

?>

<body>

<?php
//Productos de la base de datos
$results = $enlace->query("SELECT product_name, product_brand, product_code, product_image, product_price FROM productos WHERE product_name LIKE '$nameBusca'");

$count = mysqli_num_rows($results);

//Para mostrar los registros(productos) obtenidos

$products_list =  '<ul class="products-wrp">';
/*Selecciona una fila de la BD, hasta que no hayan mas
/*EOT para meter codigo HTML*/

if ($count == 1) {
    
while($row = $results -> fetch_assoc()) { 

$products_list .= <<<EOT
    <li>                     
      <form class="form-item">
        <h4>{$row["product_name"]}</h4> 
        <div><img class="imgProducto" src="{$row["product_image"]}"></div>
        <div>{$currency} {$row["product_price"]}<div>
          
        <div class="item-box">
    
          <div>
          Cantidad :
            <select name="product_qty">
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
            </select>
          </div>
    
          <div>
          Talla :
            <select name="product_size">
              <option value="CH">CH</option>
              <option value="M">M</option>
              <option value="G">G</option>
            </select>
          </div>
    
          <input name="product_code" type="hidden" value="{$row["product_code"]}">
          <button type="submit">Añadir al Carrito</button>
        </div>
      </form>
    </li>

EOT;
}


$products_list .= '</ul></div>';

echo $products_list;

}
 
 else{ ?>
  <a class="r">No se encontraron resultados<a>
<?php  
}

include("footer.php");
?>

</body>

</html>