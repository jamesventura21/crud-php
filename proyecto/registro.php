<?php
ini_set('displays errors', 1);
error_reporting(E_ALL);

include('db.php');

$nombre=$_POST['txtNombre'];
$usuario=$_POST['txtUsuario'];
$contraseña=$_POST['txtContraseña'];

$consulta="INSERT INTO `usuarios` (`Nombre`, `Usuario`, `Contraseña`) 
VALUES ('$nombre', '$usuario', '$contraseña');";

$resultado=mysqli_query($conexion,$consulta) or die("error de registro");

echo "registro exitoso";

mysqli_close($conexion);
?>