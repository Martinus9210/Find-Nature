<?php

$nombre = $_POST['nombre'];
$numero = $_POST['celular'];
$email = $_POST['mail'];
$caja = $_POST['caja'];


$mensaje = "Este mensaje fue enviado por " . $nombre . ",\r\n";
$mensaje .= "Su email es " . $email . ",\r\n";
$mensaje .= "Su teléfono es " . $numero . ",\r\n";
$mensaje .= "Mensaje: " . $caja . ",\r\n";
$mensaje .= "Enviado el: " . date("d/m/y", time());


mail('jofre.emma@gmail.com', 'Comentario en Find Nature',utf8_decode( $mensaje) );

header('Location: exito.html');

?>