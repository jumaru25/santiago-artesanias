<?php
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$email=$_POST['email'];
$consulta=$_POST['consulta'];

$destino="jumaru25@gmail.com";
$asunto="Consulta enviada desde www.santiagoartesanias.hostealoya.com";
$mensaje="Nombre: ".$nombre."\r\n";
$mensaje.="Apellido: ".$apellido."\r\n";
$mensaje.="Email: ".$email."\r\n";
$mensaje.="Consulta: ".$consulta;
$remitente="From: $nombre $apellido<$email>";

mail($destino, $asunto, $mensaje, $remitente);

header("Location: confirmacion_cons.php?formulario=1&solapa=0");
?>