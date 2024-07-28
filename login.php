<?php

include("config.php");

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

        <form method="POST" action="insert.php">

          <div class="row"> <!-- input de tipo texto en el que el cliente podrá ingresar su nombre. -->
            <i class="fas fa-user"></i>
            <input type="text" name="name" placeholder="Nombre Completo" required>
          </div>

          <div class="row">
            <i class="fas fa-at"></i> <!-- input de tipo email en el que el cliente podrá ingresar su correo.
                                           El programa lo obliga a utilizar @ para guardar los datos. -->
            <input type="email" name="email" placeholder="Correo Electrónico" required>
          </div>

          <div class="row">
            <i class="far fa-calendar-alt"></i> <!-- input de tipo texto, una vez se interactúe con él, se revela que es
                                                     un tipo date enmascarado, para que el cliente ingrese la fecha de su "cita" -->
            <input type="text" name="fecha" placeholder="Fecha para la Cita" 
                onfocus="this.type='date'" onblur="this.type='text'" required>
          </div>

          <div class="row">
            <i class="fas fa-comment-dots"></i> <!-- input de tipo texto en el que el cliente PUEDE dar un mensaje que acompañe
                                                     a la reserva. No es obligatorio así que no lleva REQUIERED -->  
            <input type="text" name="mensaje" placeholder="Mensaje Adicional">
          </div>

          <div class="row button">
            <input type="submit" value="Reservar">
          </div>
          
        </form>

      </div>
    </div>

  </body>
</html>
