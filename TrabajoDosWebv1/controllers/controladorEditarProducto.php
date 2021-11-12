<?php
if (!isset($_SESSION)) {
    session_start();
}

//1. Incluir el modelo de la BD
//   Incluir el modelo Empleado
include("../models/BaseDatos.php");
include("../models/Producto.php");

if (isset($_POST["botonEditar"])) {

    $precio = $_POST["precio"];
    echo ("$precio");
    $nombreProducto = $_POST["nombreProducto"];
    echo ("$nombreProducto");
    $marca = $_POST["marca"];
    echo ("$marca");
    $descripcionProducto = $_POST["descripcionProducto"];
    echo ("$descripcionProducto");
    $foto = $_POST["foto"];
    echo ("$foto");

    //2. recibir el id a editar
    $id_producto = $_GET["id_producto"];

    //3. recibir datos a editar
    $producto = new Producto($nombreProducto, $marca, $precio, $descripcionProducto, $foto);

    //4. ejecutar el metodo de insertar registro 
    $baseDatos = new BaseDatos();
    $resultado = $baseDatos->insertarRegistro($producto->editar($id_producto));

    //5. valido el resultado
    if ($resultado) {

        $_SESSION['mensaje'] = "exito editando el producto";
        //echo ("exito en el registro"); no es necesario
        header("Location:../views/registroProducto.php");
    } else {
        echo ("upps...tenemos problemas para registrar datos");
    }
}
