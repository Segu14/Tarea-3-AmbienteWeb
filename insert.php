<?php

include("config.php");

$name = $_POST["name"];
$email = $_POST["email"];
$fecha = $_POST["fecha"];
$mensaje = $_POST["mensaje"];

$sql = "INSERT INTO reservas(name, email, fecha, mensaje) VALUES ('$name','$email','$fecha','$mensaje')";
 
if($conn->query($sql) === TRUE){
    echo "<script>console.log('"."Insertado correctamente"."');</script>";
} else {
    echo "Error al insertar"."<br>";
    include("gracias.html");
}

?>