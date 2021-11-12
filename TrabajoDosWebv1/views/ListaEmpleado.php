<?php
include("../controllers/controladorListaEmpleado.php");
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ListaEmpleado</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/8551394753.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../public/styles/estilosListaEmpleado.css">
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
            <h2 class="titulo">Agenda de turnos</h2>
            <div class="row row-cols-1 row-cols-md-5 g-4">

                <?php foreach ($empleados as $empleado) : ?>
                    <div class="col">
                        <div class="card h-100">
                            <img src="<?php echo ($empleado["foto"]) ?>" class="card-img-top" alt="foto">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo ($empleado["nombres"]) ?></h5>
                                <h5 class="card-title"><?php echo ($empleado["apellidos"]) ?></h5>
                                <p class="card-text"><?php echo ($empleado["edad"]) ?></p>
                                <p class="card-text"><?php echo ($empleado["email"]) ?></p>
                                <p class="card-text"><?php echo ($empleado["descripcion"]) ?></p>
                                <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#confirmacion<?= $empleado["id"] ?>">
                                    <i class="fas fa-trash-alt"></i></a>
                                <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editar<?= $empleado["id"] ?>">
                                    <i class="fas fa-pencil-alt"></i></a>
                            </div>
                        </div>
                        <!-- Modal eliminar-->
                        <section>
                            <div class="modal fade" id="confirmacion<?= $empleado["id"] ?>" tabindex="-1">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header bg-primary text-white">
                                            <h5 class="modal-title" id="exampleModalLabel">Administracion Empleados</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                        </div>
                                        <div class="modal-body">
                                            <p>¿Estas seguro de eliminar este jugador?</p>
                                            <p><?= $empleado["id"] ?></p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                            <a href="../controllers/controladorEliminarEmpleado.php?id=<?= $empleado["id"] ?>" class="btn btn-danger">Aceptar</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <!-- Modal editar-->
                        <section>
                            <div class="modal fade" id="editar<?= $empleado["id"] ?>" tabindex="-1">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header bg-primary text-white">
                                            <h5 class="modal-title" id="exampleModalLabel">Administrcion Empleados</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="col-3">
                                                    <img src="<?= $empleado["foto"] ?>" alt="foto" class="img-fluid w-100">
                                                </div>
                                                <div class="col-9">
                                                    <form action="../controllers/controladorEditarEmpleado.php?id=<?= $empleado["id"] ?>" method="POST">
                                                        <div class="mb-3">
                                                            <label class="form-label">Nombre</label>
                                                            <input name="nombres" type="text" class="form-control" value="<?= $empleado["nombres"] ?>">
                                                        </div>
                                                        <div class="mb-3">
                                                            <label class="form-label">Email</label>
                                                            <input name="email" type="email" class="form-control" value="<?= $empleado["email"] ?>">
                                                        </div>
                                                        <div class="mb-3">
                                                            <label class="form-label">Edad</label>
                                                            <input name="edad" type="number" class="form-control" value="<?= $empleado["edad"] ?>">
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