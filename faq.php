<?php  

// Llamando a los campos
$correo = $_POST['correo'];
$mensaje = $_POST['mensaje'];

// Datos para el correo
$destinatario = "rombel.1097@gmail.com";
$asunto = "Contacto desde nuestra web";


$carta .= "Correo: $correo \n";
$carta .= "Mensaje: $mensaje";

// Enviando Mensaje
mail($destinatario, $asunto, $carta);
timezone_location_get();
header('location:mensaje-faq.html');

?>