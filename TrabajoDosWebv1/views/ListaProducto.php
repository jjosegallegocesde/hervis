<?php
include("../controllers/controladorListaProducto.php");
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ListaProducto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/8551394753.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../public/styles/estilosListaProducto.css">
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
        <div class="container">
            <h2 class="titulo">Actualizacion de productos</h2>
            <div class="row row-cols-1 row-cols-md-5 g-4">

                <?php foreach ($productos as $producto) : ?>
                    <div class="col">
                        <div class="card h-100">
                            <img src="<?php echo ($producto["foto"]) ?>" class="card-img-top" alt="foto">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo ($producto["nombreProducto"]) ?></h5>
                                <h5 class="card-title"><?php echo ($producto["marca"]) ?></h5>
                                <p class="card-text"><i class="fas fa-dollar-sign"></i> <?php echo ($producto["precio"]) ?></p>
                                <p class="card-text"><?php echo ($producto["descripcionProducto"]) ?></p>
                                <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#confirmacion<?= $producto["id_producto"] ?>">
                                    <i class=" fas fa-trash-alt"></i></a>
                                <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editar<?= $producto["id_producto"] ?>">
                                    <i class="fas fa-pencil-alt"></i></a>
                            </div>
                        </div>
                        <!-- Modal eliminar-->
                        <section>
                            <div class="modal fade" id="confirmacion<?= $producto["id_producto"] ?>" tabindex="-1">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header bg-primary text-white">
                                            <h5 class="modal-title" id="staticBackdropLabel">Administracion de Productos</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                        </div>
                                        <div class="modal-body">
                                            <p>¿Estas seguro de eliminar este producto?</p>
                                            <p><?= $producto["id_producto"] ?></p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                            <a href="../controllers/controladorEliminarProducto.php?id_producto=<?= $producto["id_producto"] ?>" class="btn btn-danger">Aceptar</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <!-- Modal editar-->
                        <section>
                            <div class="modal fade" id="editar<?= $producto["id_producto"] ?>" tabindex="-1">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header bg-primary text-white">
                                            <h5 class="modal-title" id="staticBackdropLabel">Administracion de Productos</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="col-3">
                                                    <img src="<?= $producto["foto"] ?>" alt="foto" class="img-fluid w-100">
                                                </div>
                                                <div class="col-9">
                                                    <form action="../controllers/controladorEditarProducto.php?id_producto=<?= $producto["id_producto"] ?>" method="POST">
                                                        <div class="mb-3">
                                                            <label class="form-label">Nombre</label>
                                                            <input name="nombreProducto" type="text" class="form-control" value="<?= $producto["nombreProducto"] ?>">
                                                        </div>
                                                        <div class="mb-3">
                                                            <label class="form-label">Marca</label>
                                                            <input name="marca" type="text" class="form-control" value="<?= $producto["marca"] ?>">
                                                        </div>
                                                        <div class="mb-3">
                                                            <label class="form-label">Precio</label>
                                                            <input name="precio" type="number" class="form-control" value="<?= $producto["precio"] ?>">
                                                        </div>
                                                        <div class="mb-3">
                                                            <label class="form-label">Descripcion</label>
                                                            <input name="descripcionProducto" type="text" class="form-control" value="<?= $producto["descripcionProducto"] ?>">
                                                        </div>
                                                        <div class="mb-3">
                                                            <label class="form-label">Fotografia</label>
                                                            <input name="foto" type="text" class="form-control" value="<?= $producto["foto"] ?>">
                                                        </div>

                                                        <button type="submit" name="botonEditar" class="btn btn-success">Editar</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                <?php endforeach ?>

            </div>
        </div>
    </main>

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