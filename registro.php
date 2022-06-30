<?php
ini_set('display_errors',1);
error_reporting(E_ALL);

include('db.php');

$nombre=$_POST['txtNombre'];
$usuario=$_POST['txtUsuario'];
$password=$_POST['txtPassword'];

$consulta="INSERT INTO `usuarios` ( `nombre`, `usuario`, `password`) VALUES ( '$nombre', '$usuario', '$password');";
$resultado=mysqli_query($conexion,$consulta) or die ("Error de registro");

echo "Registro existoso.";

mysqli_close($conexion);
header("location:index.html");

?>