<?php
    $destino= "graffiteroomg@gmail.com";
    $nombre= $_POST['nombre'];
    $apellido= $_POST['apellido'];
    $asunto= $_POST['subject'];
    $correo= $_POST['correo'];
    $mensaje= $_POST['message'];

    $contenido= "Nombre: " . $nombre . "\nApellido: " . $apellido . "\nAsunto: " . $asunto . "\nCorreo: " . $correo . "\nMensaje: " . $mensaje;
    mail($destino, "TESTEO MOTIVO CORREO", $contenido);
?>