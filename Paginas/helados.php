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

    <h3 class="title"> HELADOS </h3>
 
    <div class="products-container">
 
       <div class="product" data-name="p-1">
          <img src="../imagenes/helado1.jpg" width="85%" alt="">
          <h3>Helado Cherry</h3>
          <div class="price">S/ 7.00</div>
       </div>
 
       <div class="product" data-name="p-2">
          <img src="../imagenes/helado3.jpg" width="85%" alt="">
          <h3>Helado de coco con fresa </h3>
          <div class="price">S/ 18.00</div>
       </div>
 
       <div class="product" data-name="p-3">
          <img src="../imagenes/helado4.jpg" width="85%" alt="">
          <h3>Barquillo de Fresa</h3>
          <div class="price">S/ 10.00</div>
       </div>
 
       <div class="product" data-name="p-4">
          <img src="../imagenes/helado5.jpg" width="85%" alt="">
          <h3>Helado de Mango</h3>
          <div class="price">S/ 10.00</div>
       </div>
 
       <div class="product" data-name="p-5">
          <img src="../imagenes/helado6.jpg" alt="">
          <h3>Helado de Pistacho</h3>
          <div class="price">S/ 18.00</div>
       </div>
 
       <div class="product" data-name="p-6">
          <img src="../imagenes/helado7.jpg" width="85%" alt="">
          <h3>Helado de vainilla</h3>
          <div class="price">S/ 10.00</div>
       </div>
 
    </div>
 
 </div>
 
 <div class="products-preview">
 
    <div class="preview" data-target="p-1">
       <i class="fas fa-times"></i>
       <img src="../imagenes/helado1.jpg" width="85%" alt="">
       <h3>Helado Cherry</h3>
       <p>El helado está buenísimo, muy cremoso y con un delicioso sabor a cereza y además visualmente ha quedado muy vistoso, con un intenso color rosa que resulta francamente bonito. La base de este helado es una mermelada de cereza casera</p>
       <div class="price">$2.00</div>
       <div class="buttons">
           <a href="#" class="cart">Agregar carrito</a>
       </div>
    </div>
 
    <div class="preview" data-target="p-2">
       <i class="fas fa-times"></i>
       <img src="../imagenes/helado3.jpg" width="85%" alt="">
       <h3>Helado de Coco con fresa</h3>
       <p>Helado de coco casero, puedes comerlo para apagar el calor pero yo te recomiendo que lo hagas y descubras que es ¡EL MEJOR HELADO CASERO!</p>
       <div class="price">S/ 7.00</div>
       <div class="buttons">
        <a href="#" class="cart">Agregar carrito</a>
       </div>
    </div>
 
    <div class="preview" data-target="p-3">
       <i class="fas fa-times"></i>
       <img src="../imagenes/helado4.jpg" width="85%" alt="">
       <h3>Barquillo de Fresa</h3>
       <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur, dolorem.</p> -->
       <div class="price">S/ 18.00</div>
       <div class="buttons">
        <a href="#" class="cart">Agregar carrito</a>
       </div>
    </div>
 
    <div class="preview" data-target="p-4">
       <i class="fas fa-times"></i>
       <img src="../imagenes/helado5.jpg" width="85%" alt="">
       <h3>Helado de Mango</h3>
       <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur, dolorem.</p> -->
       <div class="price">S/ 10.00</div>
       <div class="buttons">
           <a href="#" class="cart">Agregar carrito</a>
       </div>
    </div>
 
    <div class="preview" data-target="p-5">
       <i class="fas fa-times"></i>
       <img src="../imagenes/helado6.jpg" alt="">
       <h3>Helado de Pistacho</h3>
       <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur, dolorem.</p> -->
       <div class="price">S/ 18.00</div>
       <div class="buttons">
           <a href="#" class="cart">Agregar carrito</a>
       </div>
    </div>
 
    <div class="preview" data-target="p-6">
       <i class="fas fa-times"></i>
       <img src="../imagenes/helado7.jpg" width="85%" alt="">
       <h3>Helado de vainilla</h3>
       <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur, dolorem.</p> -->
       <div class="price">S/ 10.00</div>
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