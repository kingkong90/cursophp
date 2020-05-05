<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Aprendiendo MVC</title>

    <!-- Latest compiled and minified CSS -->
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    />

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

    <!--Iconos -->
    <script
      src="https://kit.fontawesome.com/24f42b880e.js"
      crossorigin="anonymous"
    ></script>
  </head>
  <body>
    <div class="container-fluid">
      <h3 class="text-center py-3">LOGO</h3>
    </div>

    <div class="container-fluid bg-light">
      <nav class="container">
        <ul class="nav nav-justified py-2 nav-pills">
          <li class="nav-item">
            <a class="nav-link" href="#"><i class="fa fa-home"></i> PAGINA 1</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#"
              ><i class="fab fa-accusoft"></i> PAGINA 2</a
            >
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#"
              ><i class="fa fa-angellist"></i> PAGINA 3</a
            >
          </li>
        </ul>
      </nav>
    </div>

    <div class="container-fluid py-5">
      <div class="container">
        <?php
            include "paginas/inicio.php";        
        ?>
       
      </div>
    </div>
  </body>
</html>