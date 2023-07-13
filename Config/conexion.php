<?php
$servername = "localhost";
$database = "databasename";
$username = "username";
$password = "password";
// Crea conexion
$conn = mysqli_connect($servername, $username, $password, $database);
if (!$conn) {
    die("La conexión falló: " . mysqli_connect_error());
}
echo "Conectado con éxito";
mysqli_close($conn);
?>