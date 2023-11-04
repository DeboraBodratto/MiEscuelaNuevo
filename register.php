<?php
include("conexion.php");
$nombreCompleto=$_POST["nombreCompleto"];
$email=$_POST["email"];
$contrasenia=$_POST["contrasenia"];
$direccion=$_POST["direccion"];
$telefono=$_POST["telefono"];
$registro=$_POST["registro"];
if($registro=="alumno"){
    $consulta="INSERT INTO alumnos(nombreCompleto, email, contrasenia, telefono, direccion)
    VALUES('$nombreCompleto', '$email', '$contrasenia', '$telefono', '$direccion')";
}else if($registro=="directivo" || $registro=="secretario"){
    $consulta="INSERT INTO usuarios(nombreCompleto, email, contrasenia, telefono, registro, direccion, admin)
    VALUES('$nombreCompleto', '$email', '$contrasenia', '$telefono', '$registro', '$direccion', 'si')";
}else{
    $consulta="INSERT INTO usuarios(nombreCompleto, email, contrasenia, telefono, registro, direccion, admin)
    VALUES('$nombreCompleto', '$email', '$contrasenia', '$telefono', '$registro', '$direccion', 'no')";
}
$respuesta=mysqli_query($conexion, $consulta);
header("location:../../index.html")
?>