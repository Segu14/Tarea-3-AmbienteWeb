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

<!DOCTYPE html>

<html lang="esn">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reserva Práctica 3</title> 
    <link rel="stylesheet" href="estilos.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
    <!-- la librería font-awesome nos da los iconos para los cuadros de texto, una forma de hacer un diseño más limpio y legible -->
  </head>

  <body>
    <div class="container">
      <div class="wrapper">
        <div class="title"><span>Realiza tu Reserva</span></div>
        <form action="#">

          <div class="row"> <!-- input de tipo texto en el que el cliente podrá ingresar su nombre. -->
            <i class="fas fa-user"></i>
            <input type="text" placeholder="Nombre Completo" required>
          </div>

          <div class="row"> <!-- input de tipo password en el que el cliente podrá ingresar su contraseña oculta. -->
            <i class="fas fa-lock"></i>
            <input type="password" placeholder="Contraseña" required>
          </div>

          <div class="row">
            <i class="fas fa-at"></i> <!-- input de tipo email en el que el cliente podrá ingresar su correo.
                                           El programa lo obliga a utilizar @ para guardar los datos. -->
            <input type="email" placeholder="Correo Electrónico" required>
          </div>

          <div class="row">
            <i class="far fa-calendar-alt"></i> <!-- input de tipo texto, una vez se interactúe con él, se revela que es
                                                     un tipo date enmascarado, para que el cliente ingrese la fecha de su "cita" -->
            <input type="text" placeholder="Fecha para la Cita" onfocus="this.type='date'" onblur="this.type='text'" required>
          </div>

          <div class="row">
            <i class="fas fa-comment-dots"></i> <!-- input de tipo texto en el que el cliente PUEDE dar un mensaje que acompañe
                                                     a la reserva. No es obligatorio así que no lleva REQUIERED -->  
            <input type="text" placeholder="Mensaje Adicional">
          </div>

          <div class="row button">
            <input type="submit" value="Reservar">
          </div>
          
        </form>
      </div>
    </div>

  </body>
</html>
