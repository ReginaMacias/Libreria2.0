<?php
require_once'conexion.php';


if (isset($_POST['Registro'])) {

    $nombre=$_POST["nombre"];
    $apeidoP=$_POST["apeidoP"];
    $apeidoM=$_POST["apeidoM"];
    $telefono=$_POST["telefono"];
    $correo=$_POST["correo"];
    $contraseña=$_POST["contraseña"];
    $contraseña_fuerte= password_hash($contraseña,PASSWORD_DEFAULT); 

    $insertDatos = "INSERT INTO registro VALUES('$nombre','$apeidoP','$apeidoM','$telefono','$correo','$contraseña_fuerte')";

    $ejecutarInsertar = mysqli_query($enlace,$insertDatos);

    header("location:Home.php");
}

?>

