<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>GamerStore</title>
  <link rel="stylesheet" href="public/styles/estilos.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="https://kit.fontawesome.com/8551394753.js" crossorigin="anonymous"></script>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,500;0,600;1,700&display=swap" rel="stylesheet">
</head>

<body>

  <header>
    <!------------Barra--Menu---------------------->
    <div class="container">
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <a class="navbar-brand" href="#">Gamer Store <i class="fas fa-gamepad"></i></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="../TrabajoDosWebv1/views/productos.php">Products</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Add to cart <i class="cart fas fa-shopping-cart"></i> </a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="../TrabajoDosWebv1/views/registroProducto.php">Admin Products</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="../TrabajoDosWebv1/views/registroUsuario.php">Admin Workers</a>
            </li>
          </ul>
        </div>
      </nav>
    </div>
  </header>

  <!-----------------presentacion inicio-------------------------->
  <menu>
    <div class="presentacion">
      <h2 class="titulo">Welcome to Gamer Store</h2>
      <div class="row-presentacion">
        <div class="col-5">
          <h1>Gamer articles<br>A New Stile!</h1>
          <p>Amplia oferta de productos, entre consolas, juegos, accesorios y tecnología en general, con los más altos estándares de calidad y un excelente servicio al cliente. ¡Nos encanta darte gusto!</p>
          <a href="../TrabajoDosWebv1/views/productos.php" class="boton">Explore Now &#8594;</a>
        </div>
        <div class="col-5">
          <img src="../TrabajoDosWebv1/public/img/imagenPresentacion.png">
        </div>
      </div>
    </div>


    <!---------------------categorias----------------------------->
    <div class="categorias">
      <div class="pequeno-container">
        <h2 class="titulo">La tendencia. Videojuegos NFT</h2>
        <div class="row-categorias">
          <div class="col-3">
            <img src="../TrabajoDosWebv1/public/img/axieInfinity.jpg">
          </div>
          <div class="col-3">
            <img src="../TrabajoDosWebv1/public/img/axieInfinity2.jpg">
          </div>
          <div class="col-3">
            <img src="../TrabajoDosWebv1/public/img/planUndead.jpeg">
          </div>
        </div>
      </div>
    </div>
    <!---------------categoria de productos---------------------->









    <!---------------------ofertas-------------------------->
    <div class="ofertas">
      <h2 class="titulo">Black Friday and other offers</h2>
      <div class="pequeno-container">
        <div class="row">
          <div class="col-5">
            <img src="../TrabajoDosWebv1//public/img/oferta.png" alt="" class="oferta-img">
          </div>
          <div class="col-5">
            <p>Exclusively Avaible on Black Friday</p>
            <h1>Audifonos Gamer</h1>
            <small>
              Auriculares integrales para gaming en PC, sin cables de alto rendimiento con cancelación activa del Ruido y bluetooth 5.0
            </small>
            <a href="../TrabajoDosWebv1/views/productos.php" class="boton">Buy Now &#8594;</a>

          </div>
        </div>
      </div>
    </div>
  </menu>

  <!-------------------footer------------------------->
  <footer>
    <div class="footer">
      <div class="container">
        <div class="row">
          <div class="footer-col-1">
            <h3>Dowload Our App</h3>
            <p>Download App for Android and ios mobile phone</p>
            <div class="app-logo">
              <img src="../TrabajoDosWebv1/public/img/play-store.png">
              <img src="../TrabajoDosWebv1/public/img/app-store.png">
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

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>