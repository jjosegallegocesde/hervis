<?php
include("../controllers/mostrarProducto.php")
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galeria productos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/8551394753.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../public/styles/estilosProductos.css">
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
    <menu>
        <!------------------cards de productos------------------------->
        <div class="container">
            <h2 class="titulo">Galeria de productos</h2>
            <div class="row row-cols-1 row-cols-md-5 g-4">
                <?php foreach ($productos as $producto) : ?>
                    <div class="col">
                        <div class="card h-100">
                            <img src="<?php echo ($producto["foto"]) ?>" class="card-img-top" alt="foto">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo ($producto["nombreProducto"]) ?></h5>
                                <p><?php echo ($producto["marca"]) ?></p>
                                <p class="card-text"><i class="fas fa-dollar-sign"></i> <?php echo ($producto["precio"]) ?></p>
                                <p class="card-text"><?php echo ($producto["descripcionProducto"]) ?></p>
                                <h6>Add to cart <a href=""><i class="cart fas fa-shopping-cart"></i></a></h6>
                                <div class="rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star-half-alt"></i>
                                    <i class="far fa-star"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach ?>
            </div>
        </div>

        <div class="testimonios">
            <div class="container">
                <h2 class="titulo">Clientes satisfechos</h2>
                <div class="row">
                    <div class="col-3">
                        <i class="fas fa-quote-left"></i>
                        <p>Muy confiables, excelentes productos y puntuales en la entrega. los recomiendo. Muchas gracias.</p>
                        <div class="rating-testimonios">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                            <i class="far fa-star"></i>
                        </div>
                        <img src="../public/img/user-1.png">
                        <h3>Cristina Rodriguez</h3>
                    </div>
                    <div class="col-3">
                        <i class="fas fa-quote-left"></i>
                        <p>Excelente servicio y los productos excelentes, aparte que su servicio de envío es muy rápido.</p>
                        <div class="rating-testimonios">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <img src="../public/img/testimonioMariana.jpg">
                        <h3>Mariana Pajon</h3>
                    </div>
                    <div class="col-3">
                        <i class="fas fa-quote-left"></i>
                        <p>Muy buena tienda de artículos gamer. Súper recomendada, la atención es excelente y prevalece la honestidad sobre todo.</p>
                        <div class="rating-testimonios">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                            <i class="far fa-star"></i>
                        </div>
                        <img src="../public/img/user-3.png">
                        <h3>Diana Tobar</h3>
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>