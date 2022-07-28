<?php  

// Llamando a los campos
$nombre = $_POST['nombre'];
$correo = $_POST['mail'];
$telefono = $_POST['celular'];
$mensaje = $_POST['caja'];

// Datos para el correo
$destinatario = "jofre.emma92@gmail.com";
$asunto = "Contacto desde nuestra web";

$carta = "De: $nombre \n";
$carta .= "Correo: $correo \n";
$carta .= "Telefono: $telefono \n";
$carta .= "Mensaje: $mensaje";

// Enviando Mensaje
mail($destinatario, $asunto, $carta);
header('Location:exito.html');

?>