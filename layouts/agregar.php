<?php
  // 1) Conexion
  // a) realizar la conexion con la bbdd
  // b) seleccionar la base de datos a usar
$conexion = mysqli_connect("127.0.0.1","root","");
mysqli_select_db($conexion,"mueblesmedina");

  $tipo_prenda = $_POST ['tipo_de_producto'];
  $marca = $_POST['nombre'];
  $precio = $_POST['precio'];
  $imagen = addslashes(file_get_contents($_FILES['imagen']['tmp_name']));

$consulta = "INSERT INTO productos (id,tipo_de_producto,nombre,precio,imagen)
        VALUES ('','$tipo_prenda','$marca','$precio','$imagen')";

  mysqli_query($conexion,$consulta);

  header('location: pagadmin.php');
?>
