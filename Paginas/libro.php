<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/lreclamo.css">
    <link rel="stylesheet" href="../CSS/fijo.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <script src="../JavaScript/principio.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@100&display=swap" rel="stylesheet">
   <script src="https://kit.fontawesome.com/358efb9903.js" crossorigin="anonymous"></script>
    <link rel="shortcut icon" href="../imagenes/favicon.png">
    <title>Libro de reclamaciones</title>

</head>
<body>
<!-- MENU FIJO -->
<?php
        include '../include/Paginascabecera.php'
    ?>

 <div class="scrol"> </div>  
<script src="principio.js"></script>

<main class="mbody">
<h1>Libro de reclamaciones</h1>

        <form  name="form1">
            <div name="a" class="contenedor-Principal"> 
                <div name="Datos_personales" class="contenedor">
                    <h2>Datos de la persona quien presenta el reclamo</h2> 
                    <div name="cont1" class="items">
                        <label for="">Nombres</label>
                        <input type="text" name="nombre" >
                        <label for="Apellidos"> Apellidos</label>
                        <input type="text" name="Apellido" >
                        <label for="">Correo electronico</label>
                        <input type="email" name="email">
                        <label for="">Telefono</label>
                        <input type="number" range="8" name="tel">
                        <label for="">Tipo de documento</label>
                        <select  id="">
                            <option value="1" name="uwu">Seleccione</option>
                            <option value="1">DNI</option>
                            <option value="1">Pasaporte</option>
                        </select>
                        <input type="number" name="tdoc">
                        
                    </div class="items">
                </div>
                
                
                <div name="Datos necesarios" class="contenedor">
                    <h2>Si tu producto fue entregado, estos datos son necesarios</h2> 
                        <section class="items">
                            <label for="">N de Boleta</label>
                            <input type="text" name="Boleta" id="">
                            <label for="">Fecha de compra</label>
                            <input type="date" name="Fecha" id="" required>
                            
                        </section>

                </div>
                    <div name="Informacion general" class="contenedor">
                        <h2>Información general    </h2>
                        <section class="items">
                            <label for="">Identificación del bien contratado</label>
                            <select>
                                <option value="">Producto</option>
                                <option value="">Servicio</option>
                            </select>
                            <label for="">Monto reclamado</label>
                            <input type="text" name="monto">
                            <label for=""> Descripcion</label>
                            <textarea name="text" class="textarea" cols="115" rows="15" resize="none"></textarea>

                        </section>
                        

                    </div>

                    <div name="Detalle de su reclamo" class="contenedor">
                        <h2>Detalle de su reclamo </h2>
                        <section class="items">
                            <label for="">Tipo</label>
                            <select name="" id="">
                                <option value="">Reclamo</option>
                                <option value="">Queja</option>
                            </select>
                            <label for="">Detalle del reclamo/queja</label>
                            <textarea name="text2" class="textarea" cols="115" rows="15"></textarea>
                            <label for="pedido">Pedido</label>
                            <textarea name="text3" class="textarea" cols="115" rows="15"></textarea>
                            <label for="evidencia">Adjuntar evidencia</label>
                            <input type="file" name="evidencia" id=""><br><br>     
                            <input type="submit" onclick="enviarFormulario()" name="aceptar" value="Enviar"> 
                        </section>
                    </div>         
            </div>
            
        </form>
        <hr>
        </main>

        <?php
        include '../include/paginasfooter.php'
    ?>
    
</body>
</html>