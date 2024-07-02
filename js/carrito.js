$(document).ready(function(){   
        $(".form-item").submit(function(e){ //.form-item en listaProductos.php
            var form_data = $(this).serialize();
           
            $.ajax({ //Hacer ajax request a carrito_Process.php
                url: "carrito_Process.php",
                type: "POST",
                dataType:"json", //expect json value del server
                data: form_data
            }).done(function(data){ //on Ajax success
                $("#cart-info").html(data.items); //total items en cart-info
                alert("Producto añadido a Carrito!");
                if($(".shopping-cart-box").css("display") == "block"){ //if cart box is still visible
                $(".cart-box").trigger( "click" ); //trigger click to update the cart box.
                }
            })
            e.preventDefault();
        });

        //Hacer ajax request usando jQuery Load() y actualizar resultados
      $( ".cart-box").click(function(e) {
        $("#shopping-cart-results").load( "carrito_Process.php", {"load_cart":"1"}); 
      });

    //Remover items del carrito
      $("#shopping-cart-results").on('click', 'a.remove-item', function(e) {
        e.preventDefault(); 
        var pcode = $(this).attr("data-code"); //obtener codigo de producto
        $(this).parent().fadeOut(); //remover item de la caja
        $.getJSON( "carrito_Process.php", {"remove_code":pcode} , function(data){ //obtener la cuenta de los items
            $("#cart-info").html(data.items); //actualizar cuenta de items en cart-info
            $(".cart-box").trigger( "click" ); //trigger clic sobre cart-box para actualizar la lista de items
        });
      });
    });