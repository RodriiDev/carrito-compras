<?php 
session_start();
include('header.php');
?>

  <body>
    <main>
    <!--*****************************************Carousel*******************************************************-->
    <div class="container-fluid">
    <div class="cuadro">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <img class="imgCarousel" src="img/indexImg/car1.jpg" alt="Chania">
            </div>
            <div class="item">
                <img class="imgCarousel" src="img/indexImg/car2.jpg" alt="Chania">
            </div>
            <div class="item">
                <img class="imgCarousel" src="img/indexImg/car3.jpg" alt="Chania">
            </div>
            <div class="item">
                <img class="imgCarousel" src="img/indexImg/car4.jpg" alt="Flower">
            </div>
        </div>
        
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
            <li data-target="#myCarousel" data-slide-to="3"></li>
         
        </ol>
    </div>
    </div>
</div>

<!--*********************************************************************************************************--> 

<div class="caja">
<div class="container-fluid">
  <h3>Productos Nuevos</h3>
  <div class="row">
    <div class="content col-md-12 col-sm-12 col-xs-12">
      <div id="Carousel" class="carousel slide">
                 
        <!-- Carousel items -->
        <div class="carousel-inner">
                    
        <div class="item active">
          <div class="row">
          
            <div class="col-lg-offset-1 col-lg-2 col-md-offset-1 col-md-2 col-sm-4 col-xs-4"><a href="productos.php?cat=8" class="thumbnail"><img src="img/indexImg/in1.jpg" alt="Image"></a></div>
            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-4"><a href="productos.php?cat=2" class="thumbnail"><img src="img/indexImg/in2.jpg" alt="Image" ></a></div>
            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-4"><a href="productos.php?cat=6" class="thumbnail"><img src="img/indexImg/in3.jpg" alt="Image" ></a></div>
            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-4"><a href="productos.php?cat=13" class="thumbnail"><img src="img/indexImg/in4.jpg" alt="Image" ></a></div>
            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-4"><a href="productos.php?cat=16" class="thumbnail"><img src="img/indexImg/in5.jpg" alt="Image" ></a></div>             
          </div>
         
        </div><!--.item-->

        <div class="item">
          <div class="row">
        
            <div class="col-lg-offset-1 col-lg-2 col-md-offset-1 col-md-2 col-sm-4 col-xs-4"><a href="productos.php?cat=23" class="thumbnail"><img src="img/indexImg/in6.jpg" alt="Image"></a></div>
            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-4""><a href="productos.php?cat=17" class="thumbnail"><img src="img/indexImg/in7.jpg" alt="Image" ></a></div>
            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-4""><a href="productos.php?cat=1" class="thumbnail"><img src="img/indexImg/in8.jpg" alt="Image" ></a></div>
            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-4""><a href="productos.php?cat=20" class="thumbnail"><img src="img/indexImg/in9.jpg" alt="Image" ></a></div>
            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-4""><a href="productos.php?cat=27" class="thumbnail"><img src="img/indexImg/in10.jpg" alt="Image" ></a></div>             
          </div>
      
        </div><!--.item--> 
                 
  </div>
 </div>
</div>
</div>
</div>
</div>


<!--***************************************************************************************************************-->

<div class="box">
<div class="container">
  <div class="row">

  <div class="col-md-4 col-sm-6 col-xs-12"><a href="productos.php?cat=16" class="thumbnail2"><img src="img/indexImg/img1.jpg" alt="Image"></a></div>
  <div class="col-md-4 col-sm-6 col-xs-12"><a href="productos.php?cat=6" class="thumbnail2"><img src="img/indexImg/img2.jpg" alt="Image"></a></div>
  <div class="col-md-4 col-sm-6 col-xs-12"><a href="productos.php?cat=13" class="thumbnail2"><img src="img/indexImg/img3.jpg" alt="Image"></a></div>

  </div>
</div>
</div>

<!--******************************************Aviso cookies******************************************************--> 

<div id="barraaceptacion" style="display: block;">
    <div class="inner">
        Solicitamos su permiso para obtener datos estadísticos de su navegación en esta web, en cumplimiento del Real 
        Decreto-ley 13/2012. Si continúa navegando consideramos que acepta el uso de cookies.
        <a href="javascript:void(0);" class="ok" onclick="PonerCookie();"><b>OK</b></a>
    </div>
</div>


    </main>  	

  	<?php include('footer.php');?>
    
  </body>
    
  </html>

