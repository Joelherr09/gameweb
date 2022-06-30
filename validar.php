<?php
$usuario=$_POST['txtUsuario'];
$password=$_POST['txtPassword'];
session_start();
$_SESSION['usuario']=$usuario;

$conexion=mysqli_connect("localhost","root","","gameweb");

$consulta="SELECT*FROM usuarios where usuario='$usuario' and password='$password'";
$resultado=mysqli_query($conexion,$consulta);

$filas=mysqli_num_rows($resultado);

if($filas){

      header("location:home.php");

}else{
    ?>
    <?php
    include("registro.html");

    ?>
    <h1 class="bad">Error en la autentificación</h1>
    <?php    
}
mysqli_free_result($resultado);
mysqli_close($conexion);