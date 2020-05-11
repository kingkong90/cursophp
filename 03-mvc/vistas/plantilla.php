<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Aprendiendo MVC</title>

  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" />

  <link rel="stylesheet" type="text/css" href="vistas/style.css" />

  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

  <!-- Popper JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

  <!-- Latest compiled JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

  <!--Iconos -->
  <script src="https://kit.fontawesome.com/24f42b880e.js" crossorigin="anonymous"></script>
</head>

<body>
  <div class="container-fluid">
    <h3 class="text-center py-3">LOGO</h3>
  </div>

  <div class="container-fluid bg-light">
    <nav class="container">
      <ul class="nav nav-justified py-2 nav-pills">

        <?php if (isset($_GET['pagina'])) : ?>

          <?php if ($_GET['pagina'] == "registro") : ?>
            <li class="nav-item">
              <a class="nav-link active" href="index.php?pagina=registro"><i class="fa fa-home"></i>REGISTRO</a>
            </li>
          <?php else : ?>
            <li class="nav-item">
              <a class="nav-link " href="index.php?pagina=registro"><i class="fa fa-home"></i>REGISTRO</a>
            </li>
          <?php endif ?>

          <?php if ($_GET['pagina'] == "ingreso") : ?>
            <li class="nav-item">
              <a class="nav-link active" href="index.php?pagina=ingreso"><i class="fa fa-home"></i>INGRESO</a>
            </li>
          <?php else : ?>
            <li class="nav-item">
              <a class="nav-link " href="index.php?pagina=ingreso"><i class="fa fa-home"></i>INGRESO</a>
            </li>
          <?php endif ?>

          <?php if ($_GET['pagina'] == "inicio") : ?>
            <li class="nav-item">
              <a class="nav-link active" href="index.php?pagina=inicio"><i class="fa fa-home"></i>INICIO</a>
            </li>
          <?php else : ?>
            <li class="nav-item">
              <a class="nav-link " href="index.php?pagina=inicio"><i class="fa fa-home"></i>INICIO</a>
            </li>
          <?php endif ?>

          <?php if ($_GET['pagina'] == "salir") : ?>
            <li class="nav-item">
              <a class="nav-link active" href="index.php?pagina=salir"><i class="fa fa-home"></i>SALIR</a>
            </li>
          <?php else : ?>
            <li class="nav-item">
              <a class="nav-link " href="index.php?pagina=salir"><i class="fa fa-home"></i>SALIR</a>
            </li>
          <?php endif ?>

        <?php else : ?>

          <li class="nav-item">
            <a class="nav-link active" href="index.php?pagina=registro"><i class="fa fa-home"></i>REGISTRO</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php?pagina=ingreso"><i class="fa fa-home"></i>INGRESO</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php?pagina=inicio"><i class="fa fa-home"></i>INICIO</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php?pagina=salir"><i class="fa fa-home"></i>SALIR</a>
          </li>


        <?php endif ?>


      </ul>
    </nav>
  </div>

  <div class="container-fluid py-5">
    <div class="container">

      <?php
      /* Variable isset */
      $opcion = (isset($_GET['pagina'])) ? $_GET['pagina'] : "";

      switch ($opcion) {
        case 'registro':
          include "paginas/registro.php";
          break;
        case 'ingreso':
          include "paginas/ingreso.php";
          break;
        case 'inicio':
          include "paginas/inicio.php";
          break;
        case 'salir':
          include "paginas/salir.php";
          break;

        default:
          if ($opcion != "") {

            include "paginas/error404.php";
          } else {
            include "paginas/registro.php";
          }
          break;
      }




      ?>

    </div>
  </div>
</body>

</html>