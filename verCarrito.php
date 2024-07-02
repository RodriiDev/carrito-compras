<?php
session_start(); //start session
include("conexion.php");
include("header.php");
?>

<body>
<h3 class="texto">Revise su carrito antes de comprar</h3>

<?php
if(isset($_SESSION["products"]) && count($_SESSION["products"])>0){
	$total = 0;
	$cart_box = '<ul class="view-cart">';

	foreach($_SESSION["products"] as $product){ //Print cada item
		$product_name = $product["product_name"];
		$product_qty = $product["product_qty"];
		$product_price = $product["product_price"];
		$product_code = $product["product_code"];
		$product_size = $product["product_size"];
		
		$item_price = sprintf("%01.2f",($product_price * $product_qty));  // precio * cantidad
		
		$cart_box .= "<li> $product_code &ndash;  $product_name (Cant : $product_qty | $product_size) <span> $currency. $item_price </span></li>";
		
		$subtotal = ($product_price * $product_qty); 
		$total 	= ($total + $subtotal);
	}
	
	$grand_total = $total + $shipping_cost; //total
	
	$shipping_cost = ($shipping_cost)?'Costo de envío : '.$currency. sprintf("%01.2f", $shipping_cost).'<br />':'';
	
	//Mostrar compra
	$cart_box .= "<li class=\"view-cart-total\">$shipping_cost<hr>Monto a pagar : $currency ".sprintf("%01.2f", $grand_total)."</li>";
	$cart_box .= "</ul>";
	
	echo $cart_box;
?>
	<form id="compraform" class="compra" role="form" action="verificaSesion.php" method="POST">
	<button type="submit" class="btn btn-primary btn-sm btn-lg btn3d" id="btn-finaliza">Comprar</button>
	</form>


<?php

}else{

}

include("footer.php");
?>
</body>
</html>