<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/card.css">
   <link rel="stylesheet" href="../CSS/fijo.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
   <script src="https://kit.fontawesome.com/358efb9903.js" crossorigin="anonymous"></script>
   <script src="../JavaScript/principio.js" defer></script>
   <link rel="shortcut icon" href="../imagenes/favicon.png">
   <title>Pasteleria Sweet</title>
</head>
<body>
    <!-- MENU FIJO -->
    <?php
        include '../include/Paginascabecera.php'
    ?> 

<!-- <div class="scrol"> </div>  -->
<script src="principio.js"></script>

<!-- SUBMENU -->
 <div class="submenu">
    <nav class="navegar">
       <a href="tortas.php"> <img class="foto-product" src="../imagenes/ttfav.png"> <b>Tortas </b></a>
       <a href="postres.php"> <img class="foto-product" src="../imagenes/flan.png"><b>Postres</b></a>
       <a href="bocaditos.php"><img class="foto-product" src="../imagenes/galleta.png"> <b>Bocaditos</b></a>
       <a href="helados.php"><img class="foto-product" src="../imagenes/icream.png"><b>Helados</b></a>
       <a href="bebidas.php"><img class="foto-product" src="../imagenes/tom.png"><b>Bebidas</b></a>
       <span class="indicador" > </span>
    </nav> 
 </div>
  <!-- PRODUCTOS -->
  <div class="container">

    <h3 class="title"> BEBIDAS </h3>
 
    <div class="products-container">
 
       <div class="product" data-name="p-1">
          <img src="../imagenes/bebida1.jpg" alt="">
          <h3>Smoothie de frutos rojos</h3>
          <div class="price">S/ 15.00</div>
       </div>
 
       <div class="product" data-name="p-2">
          <img src="../imagenes/bebida2.jpg"  alt="">
          <h3>Smoothie de Mango</h3>
          <div class="price">S/ 18.00</div>
       </div>
 
       <div class="product" data-name="p-3">
          <img src="../imagenes/bebida3.jpg"  alt="">
          <h3>Jugo de fresa</h3>
          <div class="price">S/ 10.00</div>
       </div>
 
       <div class="product" data-name="p-4">
          <img src="../imagenes/bebida4.jpg" alt="">
          <h3>Smoothie de Coco</h3>
          <div class="price">S/ 18.00</div>
       </div>
 
       <div class="product" data-name="p-5">
          <img src="../imagenes/bebida5.jpg" alt="">
          <h3>Capuchino</h3>
          <div class="price">S/ 12.00</div>
       </div>
 
       <div class="product" data-name="p-6">
          <img src="../imagenes/bebida6.jpg" alt="">
          <h3>Chocolate</h3>
          <div class="price">S/ 10.00</div>
       </div>

       <div class="product" data-name="p-6">
        <img src="../imagenes/bebida7.jpg" alt="">
        <h3>Latte Machiato</h3>
        <div class="price">S/ 10.00</div>
     </div>

     <div class="product" data-name="p-6">
        <img src="../imagenes/bebida8.jpg" alt="">
        <h3>Cafe Helado</h3>
        <div class="price">S/ 10.00</div>
     </div>
 
    </div>
 
 </div>
 
 <div class="products-preview">
 
    <div class="preview" data-target="p-1">
       <i class="fas fa-times"></i>
       <img src="../imagenes/bebida1.jpg"  alt="">
       <h3>Smoothie de frutos rojos</h3>
       <p>Smoothie de Frutos Rojos con arándanos, moras, frambuesas y fresas es un batido lleno de antioxidantes y color intenso.</p> 
       <div class="price">S/ 15.00</div>
       <div class="buttons">
        <a href="#" class="cart">Agregar carrito</a>
       </div>
    </div>
 
    <div class="preview" data-target="p-2">
       <i class="fas fa-times"></i>
       <img src="../imagenes/bebida2.jpg"  alt="">
       <h3>Smoothie de mango</h3>
       <p>Smoothie de Mango Monin es la opción más fácil para preparar una deliciosa bebida helada en minutos. Experimenta el auténtico sabor.</p> 
       <div class="price">S/ 18.00</div>
       <div class="buttons">
        <a href="#" class="cart">Agregar carrito</a>
       </div>
    </div>
 
    <div class="preview" data-target="p-3">
       <i class="fas fa-times"></i>
       <img src="../imagenes/bebida3.jpg"  alt="">
       <h3>Jugo de fresa</h3>
       <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur, dolorem.</p> -->
       <div class="price">S/ 10.00</div>
       <div class="buttons">
        <a href="#" class="cart">Agregar carrito</a>
       </div>
    </div>
 
    <div class="preview" data-target="p-4">
       <i class="fas fa-times"></i>
       <img src="../imagenes/bebida4.jpg"  alt="">
       <h3>Smoothie de Coco</h3>
       <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur, dolorem.</p> -->
       <div class="price">S/ 18.00</div>
       <div class="buttons">
        <a href="#" class="cart">Agregar carrito</a>
       </div>
    </div>
 
    <div class="preview" data-target="p-5">
       <i class="fas fa-times"></i>
       <img src="../imagenes/bebida5.jpg" alt="">
       <h3>Capuchino</h3>
       <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur, dolorem.</p> -->
       <div class="price">S/ 12.00</div>
       <div class="buttons">
        <a href="#" class="cart">Agregar carrito</a>
       </div>
    </div>
 
    <div class="preview" data-target="p-6">
       <i class="fas fa-times"></i>
       <img src="../imagenes/bebida6.jpg" alt="">
       <h3>Chocolate</h3>
       <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur, dolorem.</p> -->
       <div class="price">S/ 10.00</div>
       <div class="buttons">
        <a href="#" class="cart">Agregar carrito</a>
       </div>
    </div>

    <div class="preview" data-target="p-7">
        <i class="fas fa-times"></i>
        <img src="../imagenes/bebida7.jpg" alt="">
        <h3>Latte Machiato</h3>
        <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur, dolorem.</p> -->
        <div class="price">S/ 10.00</div>
        <div class="buttons">
           <a href="#" class="cart">Agregar carrito</a>
        </div>
    </div>

    <div class="preview" data-target="p-8">
        <i class="fas fa-times"></i>
        <img src="../imagenes/bebida8.jpg" alt="">
        <h3>Cafe Helado</h3>
        <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur, dolorem.</p> -->
        <div class="price">S/ 15.00</div>
        <div class="buttons">
           <a href="#" class="cart">Agregar carrito</a>
        </div>
    </div>
 
 </div>
 <hr>

 <?php
        include '../include/paginasfooter.php'
    ?>
    
</body>
</html>