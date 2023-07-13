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

 <div class="scrol"> </div>  
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

        <h3 class="title"> Tortas </h3>
     
         <div class="products-container">
           <div class="product" data-name="p-1">
              <img src="../imagenes/torta1.jpg" alt="">
              <h3>Torta Alegria</h3>
              <div class="price">S/ 80.00</div>
           </div>
     
           <div class="product" data-name="p-2">
              <img src="../imagenes/torta2.jpg" alt="">
              <h3>Torta Sol</h3>
              <div class="price">S/155.00</div>
           </div>
     
           <div class="product" data-name="p-3">
              <img src="../imagenes/torta3.jpg" alt="">
              <h3>Torta Macarons</h3>
              <div class="price">S/ 120.00</div>
           </div>
     
           <div class="product" data-name="p-4">
              <img src="../imagenes/torta4.jpg" alt="">
              <h3>Torta Perla</h3>
              <div class="price">S/ 75.00</div>
           </div>
     
           <div class="product" data-name="p-5">
              <img src="../imagenes/torta5.jpg" alt="">
              <h3>Torta de Higo</h3>
              <div class="price">S/ 195.00</div>
           </div>
     
           <div class="product" data-name="p-6">
              <img src="../imagenes/torta6.jpg" alt="">
              <h3>Torta Mora</h3>
              <div class="price">109.00</div>
           </div>
     
         </div>
      </div>
     
     <div class="products-preview">
     
      <div class="preview" data-target="p-1">
           <i class="fas fa-times"></i>
           <img src="../imagenes/torta1.jpg" alt="">
           <h3>Torta Alegria</h3>
           <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur, dolorem.</p>
           <div class="price">S/ 80.00</div>
           <div class="buttons">
              <a href="#" class="cart">Agregar carrito</a>
           </div>
      </div>
     
        <div class="preview" data-target="p-2">
           <i class="fas fa-times"></i>
           <img src="../imagenes/torta2.jpg" alt="">
           <h3>Torta Sol</h3>
           <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur, dolorem.</p>
           <div class="price">S/ 155.00</div>
           <div class="buttons">
            <a href="#" class="cart">Agregar carrito</a>
           </div>
        </div>
     
        <div class="preview" data-target="p-3">
           <i class="fas fa-times"></i>
           <img src="../imagenes/torta3.jpg" alt="">
           <h3>Torta Macarons</h3>
           <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur, dolorem.</p>
           <div class="price">S/ 120.00</div>
           <div class="buttons">
            <a href="#" class="cart">Agregar carrito</a>
           </div>
        </div>
     
        <div class="preview" data-target="p-4">
           <i class="fas fa-times"></i>
           <img src="../imagenes/torta4.jpg" alt="">
           <h3>Torta Perla</h3>
           <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur, dolorem.</p>
           <div class="price">S/ 75.00</div>
           <div class="buttons">
            <a href="#" class="cart">Agregar carrito</a>
           </div>
        </div>
     
        <div class="preview" data-target="p-5">
           <i class="fas fa-times"></i>
           <img src="../imagenes/torta5.jpg" alt="">
           <h3>Torta de Higo</h3>
           <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur, dolorem.</p>
           <div class="price">S/ 195.00</div>
           <div class="buttons">
            <a href="#" class="cart">Agregar carrito</a>
           </div>
        </div>
     
        <div class="preview" data-target="p-6">
           <i class="fas fa-times"></i>
           <img src="../imagenes/torta6.jpg" alt="">
           <h3>Torta Mora</h3>
           <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur, dolorem.</p>
           <div class="price">S/ 109.00</div>
           <div class="buttons">
            <a href="#" class="cart">Agregar carrito</a>
           </div>
        </div>
     
   </div>

   <?php
        include '../include/paginasfooter.php'
    ?>

</body>
</html>