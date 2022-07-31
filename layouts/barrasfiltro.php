<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/CSS/admin.css">
    <title>Document</title>
</head>

<body>

    <header class="elementoA">
        <div class="logo">
            <div class="headerConteiner">
                <img src="../public/img/logo.jpg" alt="">
                <div class="carrito">
                    <p class="admin123">Administrador</p>
                    <a href="" class="carritoCompra"><i class="carrito fas fa-shopping-cart fa-lg" id="paraPc"></i>
                    </a>
                </div>
            </div>
        </div>

    </header>
    <main>
        <div class="maincss">
            <h1>Inventario de Barra</h1>
            <button  type="submit"><a href="../index.html">Inicio</a></button>
            <button  type="submit"><a href="pagadmin.php">Lista</a></button>
            <button  type="submit"><a href="agregar.html">Agregar ropa</a></button>
            <button  type="submit"><a href="parrillasfiltro.php">Parrilla</a></button>
            <button  type="submit"><a href="barrasfiltro.php">Barra</a></button>
            <button  type="submit"><a href="apliquesfiltro.php">Apliques</a></button>
            <button  type="submit"><a href="portonfiltro.php">Porton</a></button>
            <h2>Lista de productos</h2>
            <p>La siguiente lista muestra los datos de las barras disponibles.</p>
            <div class="tabla1">
                <table border="1">
                    <tr>
                        <th>ID</th>
                        <th>TIPO DE PRODUCTO</th>
                        <th>NOMBRE</th>
                        <th>PRECIO</th>
                        <th>IMAGEN</th>
                        <th>EDITAR</th>
                        <th>BORRAR</th>
                    </tr>
                    <?php

    $conexion = mysqli_connect("127.0.0.1", "root", "");
    mysqli_select_db($conexion, "mueblesmedina");



    $consulta="SELECT * FROM productos WHERE tipo_de_producto = 'barra'";

    $datos= mysqli_query($conexion, $consulta);

    
     while ($reg=mysqli_fetch_array($datos)) { ?>
                    <tr>
                        <td><?php echo $reg['id']; ?></td>
                        <td><?php echo $reg['tipo_de_producto']; ?></td>
                        <td><?php echo $reg['nombre']; ?></td>
                        <td><?php echo $reg['precio']; ?></td>
                        <td><img src="data:image/png;base64, <?php echo base64_encode($reg['imagen'])?>" alt=""
                                width="100px" height="100px"></td>
                        <td><a href="modificar.php?id=<?php echo $reg['id'];?>">Editar</a></td>
                        <td><a href="borrar.php?id=<?php echo $reg['id'];?>">Borrar</a></td>
                    </tr>
                    <?php } ?>
                </table>
            </div>
        </div>


    </main>
    <footer>

    </footer>

</body>

</html>