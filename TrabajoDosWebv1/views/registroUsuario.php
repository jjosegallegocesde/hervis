<?php

if (!isset($_SESSION)) {
  session_start();
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>RegistroUsuario</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
  <script src="https://kit.fontawesome.com/8551394753.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="../public/styles/estilosRegistroUsuario.css">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,500;0,600;1,700&display=swap" rel="stylesheet">
</head>


<body>
  <header>
    <!------------Barra--Menu---------------------->
    <div class="container">
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <a class="navbar-brand" href="../index.php">Gamer Store <i class="fas fa-gamepad"></i></i></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="../index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="../views/productos.php">Products</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Add to cart <i class="cart fas fa-shopping-cart"></i> </a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="../views/registroProducto.php">Admin Products</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="../views/registroUsuario.php">Admin Workers</a>
            </li>
          </ul>
        </div>
      </nav>
    </div>
  </header>
  <main>


    <div class="container overflow-hidden">
      <h3 class="titulo">Recursos Humanos</h3>
      <div class="row gx-6">
        <div class="col">
          <div class="p-3 border bg-light">
            <form action="../controllers/controladorUsuario.php" method="POST">
              <h3>Registro de empleados</h3>
              <div class="mb-3">
                <label class="form-label">Nombres</label>
                <input type="text" placeholder="ingrese nombre" class="form-control" name="nombres">
              </div>

              <div class="mb-3">
                <label class="form-label">Apellidos</label>
                <input type="text" placeholder="ingrese apellido" class="form-control" name="apellidos">
              </div>

              <div class="mb-3">
                <label class="form-label">Email</label>
                <input type="email" placeholder="ingrese email" class="form-control" name="email">
              </div>

              <div class="mb-3">
                <label class="form-label">Edad</label>
                <input type="number" placeholder="ingrese edad" class="form-control" name="edad">
              </div>

              <div class="mb-3">
                <label class="form-label">Descripcion</label>
                <textarea class="form-control" placeholder="descripcion" name="descripcion"></textarea>
              </div>

              <div class="mb-3">
                <label class="form-label">Fotografia</label>
                <input type="text" placeholder="ingrese fotografia" class="form-control" name="fotografia">
              </div>

              <button type="submit" class="btn btn-primary" name="boton">registrar</button>
              <br><br><br>
              <button type="button" class="btn btn-secondary"><a href="../views/ListaEmpleado.php">Ver empleados</a></button>

            </form>

          </div>
          <div class="col-12 col-md-4 align-self-end text-center">
            <!--<img src="../public/img/empleados.png" alt="imagen" class="w-100 img-fluid">-->
          </div>
        </div>
      </div>
    </div>



  </main>

  <section>
    <?php if (isset($_SESSION['mensaje'])) : ?>
      <div class="modal fade" id="modal" tabindex="-1">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header bg-primary text-white">
              <h5 class="modal-title" id="exampleModalLabel">Registro de usuarios</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body text-dark">
              <h5><?php echo ($_SESSION['mensaje']) ?></h5>
            </div>
          </div>
        </div>
      </div>
      <?php unset($_SESSION['mensaje']) ?>
    <?php endif ?>
  </section>

  <!-------------------footer------------------------->
  <footer>
    <div class="footer">
      <div class="container">
        <div class="row">
          <div class="footer-col-1">
            <h3>Dowload Our App</h3>
            <p>Download App for Android and ios mobile phone</p>
            <div class="app-logo">
              <img src="../public/img/play-store.png">
              <img src="../public/img/app-store.png">
            </div>
          </div>
          <div class="footer-col-2">
            <h3>Gamer Store <i class="fas fa-gamepad"></i></h3>
            <P>Encuentra lo mejor y mas destacado, articulos gamers en variedad de categorias</P>
          </div>
          <div class="footer-col-3">
            <h3>Aliados</h3>
            <ul>
              <li><i class="fab fa-amazon"></i> Amazon</li>
              <li><i class="fab fa-cc-paypal"> Paypal</i>
              <li>
              <li><i class="fab fa-playstation"></i> Play Station</li>
              <li><i class="fab fa-ebay"></i> ebay</li>
            </ul>
          </div>
          <div class="footer-col-4">
            <h3>Follow us</h3>
            <ul>
              <li><i class="fab fa-facebook"></i> Facebook</li>
              <li><i class="fab fa-twitter"></i> Twitter</li>
              <li><i class="fab fa-instagram"></i> Instagram</li>
              <li><i class="fab fa-tiktok"></i> Tick Tock</li>
            </ul>
          </div>
        </div>
        <hr>
        <p class="copyright"><i class="far fa-copyright"></i> 2021 - by Hervis - Cesde Academy</p>
      </div>
    </div>
  </footer>

  <script type="module" src="../public/js/lanzarmodal.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</body>

</html>