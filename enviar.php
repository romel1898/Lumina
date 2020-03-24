<?php  

// Llamando a los campos
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$correo = $_POST['correo'];
$confirmar = $_POST['confirmar'];
$telefono = $_POST['telefono'];
$celular = $_POST['celular'];                             
$mensaje = $_POST['mensaje'];

// Datos para el correo
$destinatario = "rombel.1097@gmail.com";
$asunto = "Contacto desde nuestra web";

$carta = "De: $nombre \n";
$carta .= "Correo: $correo \n";
$carta .= "Confirmacion de Correo: $confirmar \n";
$carta .= "Celular: $celular \n";
$carta .= "Telefono: $telefono \n";
$carta .= "Mensaje: $mensaje";

// Enviando Mensaje
mail($destinatario, $asunto, $carta);
timezone_location_get();
header('location:mensaje-de-envio.html');

?>