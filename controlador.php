<?php
require_once'conexion.php';
if (!empty($_POST["ingresar"])) {
    if (empty($_POST["correo"]) and empty($_POST["password"])) {
        header("location:ini.php");
    } else {
        $correo=$_POST["correo"];
        $contraseña=$_POST["password"];
        $sql=$enlace->query("select * from registro where correo='$correo' and contraseña='$contraseña'");
        if ($datos=$sql->fetch_object()) {
            header("location:Home.php");
        } else {
            header("location:ini2.php"); 
        }
        
     }

}

?>