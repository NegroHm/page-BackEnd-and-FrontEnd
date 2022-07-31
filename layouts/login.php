<?php
$user = $_POST["user"];

$pass = $_POST["pass"];

$usuario = "admin";
$contrasenia = "1234";

if( $usuario == $user && $contrasenia == $pass ) {
    //agregar la pagina de admin
header("location: pagadmin.php");
} else {
  header("location:error.html");
}


 ?>