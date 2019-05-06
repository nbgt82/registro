<?php

//Llamdo de campos
$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$telefono = $_POST['telefono'];
$mensaje = $_POST['mensaje'];

// Datos para el correo
$destitanatario = "batres682@gmail.com";
$asunto = "Contacto desde nuestra web";

$carta = "De: $nombre \n";
$carta .= "Correo: $correo \n";
$carta .= "Telefono $telefono\n";
$carta .= "Mensaje $Mensaje\n";

//Enviando Mensaje 
mail($destinatario, $asunto, $carta);
header('Location:mensaje-de-envio.html')


?>