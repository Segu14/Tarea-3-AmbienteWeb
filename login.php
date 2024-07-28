<?php

$servername = "localhost";
$username = "root";
$password = "";
$databse = "practica3";

$conn = new mysqli ($servername, $username, $password, $databse);

if ($conn->connect_error) {
    die("Error de Conexión");
}
echo "Conexión exitosa";
?>
