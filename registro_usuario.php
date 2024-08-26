<?php
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$email=$_POST['email'];
include("conexion.php");
mysqli_query($link,"insert into usuario values (0,'$nombre','$apellido','$email') ");
header("Location: confirmacion_cons.php?formulario=2&solapa=0");
?>