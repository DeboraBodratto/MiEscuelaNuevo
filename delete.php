<?php
include("conexion.php");
$email = $_POST["email"];
$consulta = "DELETE FROM usuarios WHERE email='$email'";
$respuesta = mysqli_query($conexion, $consulta);
if($respuesta) {
    header("location:../../index.html");
} else {
    header("location:../delete.html");
}
?>