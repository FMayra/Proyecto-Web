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

    <h3 class="title"> POSTRES </h3>
 
    <div class="products-container">
 
       <div class="product" data-name="p-1">
          <img src="../imagenes/tart2.jpg" alt="">
          <h3>Muffins de frutos secos (12unid.)</h3>
          <div class="price">S/ 30.00</div>
       </div>
 
       <div class="product" data-name="p-2">
          <img src="../imagenes/tart3.jpg" alt="">
          <h3>Pie de Limón</h3>
          <div class="price">S/ 55.00</div>
       </div>
 
       <div class="product" data-name="p-3">
          <img src="../imagenes/tarta5.jpg" width="250px" alt="">
          <h3>Volcan de Fresa</h3>
          <div class="price">S/ 12.00</div>
       </div>
 
       <div class="product" data-name="p-4">
          <img src="../imagenes/tartaleta.jpeg" width="85%" alt="">
          <h3>Crema de fresa</h3>
          <div class="price">S/ 18.00</div>
       </div>
 
       <div class="product" data-name="p-5">
          <img src="../imagenes/ma.jpg" alt="">
          <h3>Crema volteada</h3>
          <div class="price">S/ 15.00</div>
       </div>
 
       <div class="product" data-name="p-6">
          <img src="../imagenes/postress.jpg" alt="">
          <h3>Macarons (12 unid.)</h3>
          <div class="price">S/ 40.00</div>
       </div>
 
    </div>
 
 </div>
 
 <div class="products-preview">
 
    <div class="preview" data-target="p-1">
       <i class="fas fa-times"></i>
       <img src="../imagenes/tart2.jpg" alt="">
       <h3>Muffins de frutos secos</h3>
       <p>Muffins con relleno de frutas secas acarameladas con un toque de glaseado Sweet.</p>
       <div class="price">S/ 30.00</div>
       <div class="buttons">
           <a href="#" class="cart">Agregar carrito</a>
       </div>
    </div>
 
    <div class="preview" data-target="p-2">
       <i class="fas fa-times"></i>
       <img src="../imagenes/tart3.jpg" alt="">
       <h3>Pie de Limón</h3>
       <p>A base de una masa dulce, crocante y súper deliciosa este pie de limón envuelve a cualquiera. Su característico sabor a limón convierte esta tarta en única y especial por lo que consumirla es buena alternativa para quitar el antojo.</p>
       <div class="price">S/ 30.00</div>
       <div class="buttons">
           <a href="#" class="cart">Agregar carrito</a>
       </div>
    </div>
 
    <div class="preview" data-target="p-3">
       <i class="fas fa-times"></i>
       <img src="../imagenes/tarta5.jpg" alt="">
       <h3>Volcan de fresa</h3>
       <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur, dolorem.</p> -->
       <div class="price">S/ 12.00</div>
       <div class="buttons">
           <a href="#" class="cart">Agregar carrito</a>
       </div>
    </div>
 
    <div class="preview" data-target="p-4">
       <i class="fas fa-times"></i>
       <img src="../imagenes/tartaleta.jpeg" width="85%" alt="">
       <h3>Torta Perla</h3>
       <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur, dolorem.</p> -->
       <div class="price">S/ 18.00</div>
       <div class="buttons">
           <a href="#" class="cart">Agregar carrito</a>
       </div>
    </div>
 
    <div class="preview" data-target="p-5">
       <i class="fas fa-times"></i>
       <img src="../imagenes/ma.jpg" alt="">
       <h3>Crema volteada</h3>
       <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur, dolorem.</p> -->
       <div class="price">S/ 15.00</div>
       <div class="buttons">
           <a href="#" class="cart">Agregar carrito</a>
       </div>
    </div>
 
    <div class="preview" data-target="p-6">
       <i class="fas fa-times"></i>
       <img src="../imagenes/postress.jpg" alt="">
       <h3>Macarons (12 unid.)</h3>
       <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur, dolorem.</p> -->
       <div class="price">S/40.00</div>
       <div class="buttons">
           <a href="#" class="cart">Agregar carrito</a>
       </div>
    </div>
 
 </div>
 <hr>
 </main>

 <?php
        include '../include/paginasfooter.php'
    ?>


</body>
</html>