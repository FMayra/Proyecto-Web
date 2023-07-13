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
       <a href="postres.php> <img class="foto-product" src="../imagenes/flan.png"><b>Postres</b></a>
       <a href="bocaditos.php"><img class="foto-product" src="../imagenes/galleta.png"> <b>Bocaditos</b></a>
       <a href="helados.php"><img class="foto-product" src="../imagenes/icream.png"><b>Helados</b></a>
       <a href="bebidas.php"><img class="foto-product" src="../imagenes/tom.png"><b>Bebidas</b></a>
       <span class="indicador" > </span>
    </nav> 
</div>

<!-- PRODUCTOS -->
<div class="container">

    <h3 class="title"> BOCADITOS </h3>
 
    <div class="products-container">
 
       <div class="product" data-name="p-1">
          <img src="../imagenes/cat3.jpg"  width="85%" alt="">
          <h3>Galletas de avena (6 unid.)</h3>
          <div class="price">S/ 16.00 </div>
       </div>
 
       <div class="product" data-name="p-2">
          <img src="../imagenes/cat4.jpg" alt="">
          <h3>Hojaldre de corazon</h3>
          <div class="price">S/ 5.50 </div>
       </div>
 
       <div class="product" data-name="p-3">
          <img src="../imagenes/cat5.jpg" width="85%" alt="">
          <h3>Choco Krunch (6 unid.)</h3>
          <div class="price">S/ 12.00 </div>
       </div>
 
       <div class="product" data-name="p-4">
          <img src="../imagenes/cat6.jpg"  width="85%" alt="">
          <h3>Macarons (6 unid.)</h3>
          <div class="price">S/ 20.00 </div>
       </div>
 
       <div class="product" data-name="p-5">
          <img src="../imagenes/cat7.jpg" width="85%"  alt="">
          <h3>Cocada</h3>
          <div class="price">S/ 5.00 </div>
       </div>
 
       <div class="product" data-name="p-6">
          <img src="../imagenes/cat8.jpg" width="85%" alt="">
          <h3>Mini Pizzas (6 unid.)</h3>
          <div class="price">S/ 25.00 </div>
       </div>

       <div class="product" data-name="p-7">
        <img src="../imagenes/cat10.jpg" width="85%" alt="">
        <h3>Mini cinnamon rolls (6 unid.)</h3>
        <div class="price">S/ 25.00 </div>
     </div>

     <div class="product" data-name="p-8" >
        <img src="../imagenes/cat11.jpg" width="85%" alt="">
        <h3>Pancito con espinaca </h3>
        <div class="price">S/ 3.50 </div>
     </div>
 
    </div>
 
</div>
 
<div class="products-preview">
 
    <div class="preview" data-target="p-1">
       <i class="fas fa-times"></i>
       <img src="../imagenes/cat3.jpg"  width="85%" alt="">
       <h3>Galletas de avena (6 unid.)</h3>
       <p>Las galletas de avena son unos dulces sanos, ya que poseen menos azúcares y harinas que las galletas tradicionales. En su lugar, son ricas en fibra</p>
       <div class="price">S/ 16.00 </div>
       <div class="buttons">
           <a href="#" class="cart">Agregar carrito</a>
       </div>
    </div>
 
    <div class="preview" data-target="p-2">
       <i class="fas fa-times"></i>
       <img src="../imagenes/cat4.jpg" alt="">
       <h3>Hojaldre de corazon</h3>
       <p>Si hay unas galletitas que son altamente adictivas y deliciosas son los hojaldres de corazón. Son acarameladas, doraditas y ultra crocantes. Una vez que las hagas no vas a querer comprarlas nunca más!</p>
       <div class="price">S/ 5.50 </div>
       <div class="buttons">
           <a href="#" class="cart">Agregar carrito</a>
       </div>
    </div>
 
    <div class="preview" data-target="p-3">
       <i class="fas fa-times"></i>
       <img src="../imagenes/cat5.jpg"  width="85%" alt="">
       <h3>Choco Krunch (6 unid.)</h3>
       <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur, dolorem.</p> -->
       <div class="price">S/ 12.00 </div>
       <div class="buttons">
           <a href="#" class="cart">Agregar carrito</a>
       </div>
    </div>
 
    <div class="preview" data-target="p-4">
       <i class="fas fa-times"></i>
       <img src="../imagenes/cat6.jpg" width="85%"  alt="">
       <h3>Macarons (6 unid.)</h3>
       <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur, dolorem.</p> -->
       <div class="price">S/ 20.00 </div>
       <div class="buttons">
           <a href="#" class="cart">Agregar carrito</a>
       </div>
    </div>
 
    <div class="preview" data-target="p-5">
       <i class="fas fa-times"></i>
       <img src="../imagenes/cat7.jpg" width="85%"  alt="">
       <h3>Cocada</h3>
       <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur, dolorem.</p> -->
       <div class="price">S/ 5.00 </div>
       <div class="buttons">
           <a href="#" class="cart">Agregar carrito</a>
       </div>
    </div>
 
    <div class="preview" data-target="p-6">
       <i class="fas fa-times"></i>
       <img src="../imagenes/cat8.jpg" width="85%"  alt="">
       <h3>Mini Pizzas (6 unid.)</h3>
       <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur, dolorem.</p> -->
       <div class="price">S/ 25.00</div>
       <div class="buttons">
           <a href="#" class="cart">Agregar carrito</a>
       </div>
    </div>

    <div class="preview" data-target="p-7">
        <i class="fas fa-times"></i>
        <img src="../imagenes/cat10.jpg" width="85%"  alt="">
        <h3>Mini Cinnamon Rolls (6 unid.)</h3>
        <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur, dolorem.</p> -->
        <div class="price">S/ 25.00 </div>
        <div class="buttons">
           <a href="#" class="cart">Agregar carrito</a>
        </div>
    </div>

    <div class="preview" data-target="p-8">
        <i class="fas fa-times"></i>
        <img src="../imagenes/cat11.jpg" width="85%"  alt="">
        <h3>Pancito con espinaca</h3>
        <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur, dolorem.</p> -->
        <div class="price">S/ 3.50 </div>
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