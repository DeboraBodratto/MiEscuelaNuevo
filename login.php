<?php
include("conexion.php");
$correo=$_POST["email"];
$contrasenia=$_POST["contrasenia"];
$consulta="select email, admin from usuarios where email='$correo' and contrasenia='$contrasenia'";
$consulta1="select email from alumnos where email='$correo' and contrasenia='$contrasenia'";
$respuesta=mysqli_query($conexion, $consulta);
$respuesta1=mysqli_query($conexion, $consulta1);
$filas= mysqli_num_rows($respuesta);
$filas1= mysqli_num_rows($respuesta1);
if ($filas>0 || $filas1>0){
    $usuario=mysqli_fetch_assoc($respuesta);
    $usuario1=mysqli_fetch_assoc($respuesta1);
    if($usuario["admin"]=="si"){
        header("location:../usuarios1.html");
    }else if($usuario1){
        header("location:../../index.html");
    }else{
         header("location:../../index.html");
    }
}else{
    header("location:../error.html"); 
}
?>