<?php
session_start(); //start session
include_once("conexion.php");

############# Añadir productos a sesion ###################
if(isset($_POST["product_code"])) //isset — Determina si una variable está definida y no es NULL
{// Se mete el product code a un arreglo
	foreach($_POST as $key => $value){
		$new_product[$key] = filter_var($value, FILTER_SANITIZE_STRING); //crear un nuevo array de producto
	}
	
	//despues obtener nombre y precio de la BD con el product code
	$statement = $enlace->prepare("SELECT product_name, product_price FROM productos WHERE product_code=? LIMIT 1");
	$statement->bind_param('s', $new_product['product_code']);
	$statement->execute();
	$statement->bind_result($product_name, $product_price);
	
	while($statement->fetch()){ 
		$new_product["product_name"] = $product_name; //fetch product name from database
		$new_product["product_price"] = $product_price;  //fetch product price from database
		
		if(isset($_SESSION["products"])){  //si session var ya existe
			if(isset($_SESSION["products"][$new_product['product_code']])) //check item exist in products array
			{
				unset($_SESSION["products"][$new_product['product_code']]); //unset old item
			}			
		}
		
		$_SESSION["products"][$new_product['product_code']] = $new_product;	//update products with new item array	
	}
	
 	$total_items = count($_SESSION["products"]); //count total items
	die(json_encode(array('items'=>$total_items))); //output json 

}

################## list products in cart ###################
if(isset($_POST["load_cart"]) && $_POST["load_cart"]==1)
{

	if(isset($_SESSION["products"]) && count($_SESSION["products"])>0){ //si tenemos una variable de sesion
		$cart_box = '<ul class="cart-products-loaded">';
		$total = 0;
		foreach($_SESSION["products"] as $product){ //loop though items and prepare html content
			
			//set variables to use them in HTML content below
			$product_name = $product["product_name"]; 
			$product_price = $product["product_price"];
			$product_code = $product["product_code"];
			$product_qty = $product["product_qty"];
			$product_size = $product["product_size"];
			
			$cart_box .=  "<li> $product_name (Cant : $product_qty | $product_size ) &mdash; $currency ".sprintf("%01.2f", ($product_price * $product_qty)). " <a href=\"#\" class=\"remove-item\" data-code=\"$product_code\">&times;</a></li>";
			$subtotal = ($product_price * $product_qty);
			$total = ($total + $subtotal);
		}
		$cart_box .= "</ul>";
		$cart_box .= '<div class="cart-products-total">Total : '.$currency.sprintf("%01.2f",$total).' <u><a href="verCarrito.php" class="btn btn-primary btn-primary">Comprar</a></u></div>';

				

		die($cart_box); //exit and output content

	}else{
		die("Tu carrito esta vacío");
	}
}

################# Remover item del carrito ################
if(isset($_GET["remove_code"]) && isset($_SESSION["products"]))
{
	$product_code   = filter_var($_GET["remove_code"], FILTER_SANITIZE_STRING); //get the product code to remove

	if(isset($_SESSION["products"][$product_code]))
	{
		unset($_SESSION["products"][$product_code]);
	}
	
 	$total_items = count($_SESSION["products"]);
	die(json_encode(array('items'=>$total_items)));
}