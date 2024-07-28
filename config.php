<?php

$servername = "localhost";
$username = "root";
$password = "";
$databse = "practica3";

$conn = new mysqli ($servername, $username, $password, $databse);

if ($conn->connect_error) {
    die("Error de Conexión");
}
echo "<script>console.log('"."Conexión exitosa"."');</script>";
// En la consola de nuestro se imprimirá este mensaje si la conexión al usuario XAMPP y la BD fueron exitosos.
?>