<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@300&display=swap" rel="stylesheet">
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <link rel="stylesheet" href="../public/CSS/barra.css">

  <title>Barras</title>
</head>

<body>
  <header class="elementoA">
    <div class="logo">
      <div class="headerConteiner">
        <img src="../public/img/logo.jpg" alt="">
        <div class="carrito">
          <a href="" class="carritoCompra"><i class="carrito fas fa-shopping-cart fa-lg" id="paraPc"></i>
          </a>
        </div>
      </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container-fluid">
        <a class="navbar-brand" href="../index.html">Inicio</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
          aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">

            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="../layouts/parrilla.php">Parrillas</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="../layouts/barras.php">Barras</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="../layouts/apliques.php">Apliques Decorativos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../layouts/portones.php ">Portones</a>
            </li>

          </ul>
        </div>
      </div>
    </nav>

  </header>

  <section>
    <div class="container">
      <div class="row">

        <?php
          $conexion = mysqli_connect("127.0.0.1", "root", "");
          $consulta= "SELECT * FROM `productos` WHERE `tipo_de_producto` = 'barra'";
          mysqli_select_db($conexion, "mueblesmedina");
          $datos= mysqli_query($conexion, $consulta);
          while ($reg = mysqli_fetch_array($datos)) { ?>

        <!-- card: -->
        <div class="card col-sm-12 col-md-6 col-lg-3">
          <img class="card-img-top" src="data:image/jpg;base64, <?php echo base64_encode($reg['imagen'])?>" alt="">
          <h3 class="card-title" style="width: 100%; font-size:25px;"><?php echo ucwords($reg['nombre']) ?>
          </h3>
          <span>
          </span>
          <span>$<?php echo $reg['precio']; ?></span>
        </div>

        <?php } ?>

      </div>
    </div>
  </section>

  <footer>

    <div class="redes">
      <div class="redesSociales">
        <a href="https://www.instagram.com/muebles_hector_medina/"><i class="fab fa-instagram fa-2x ig"></i></a>
        <a href="https://www.facebook.com/hector.medina.3517"><i class="fab fa-facebook-f fa-2x"></i></a>


      </div>
      <span class="contacto">
        Contacto
      </span>


    </div>
    <div class="text">
      <p>El compromiso de la empresa es que en la realización de cada trabajo quede plasmado el espíritu de ser pieza
        única creada a mano y con carácter propio, ya que cada pieza es de particular creación de un buen hacer
        artesano. Podemos desarrollar sus propias creaciones y materializar sus ideas. Domicilio: Manuel A. Sáez 1090,
        Las Heras.</p>

    </div>

  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
  </script>

</body>

</html>