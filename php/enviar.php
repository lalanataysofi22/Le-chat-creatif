<?php

$destino="lechatcreatif2020@gmail.com";
$nombre=$_post["Nombre"];
$correo=$_post["Correo"];
$telefono=$_post["Telefono"];
$mensaje=$_post["Mensaje"];
$contenido="Nombre: " . $nombre . "\nCorreo: " . $correo . "\nTelefono: " . $Telefono . "\Mensaje: " . $mensaje;

mail($destino,"Contacto", $contenido);
header("location:gracias.html"); 

?>