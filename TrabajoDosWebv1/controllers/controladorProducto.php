<?php
if (!isset($_SESSION)) {
    session_start();
}

//1. Incluir el modelo de la BD
//   Incluir el modelo Empleado
include("../models/BaseDatos.php");
include("../models/Producto.php");

//2.  Recoger los datos de la vista
if (isset($_POST["botonProducto"])) {

    $nombreProducto = $_POST["nombreProducto"];
    echo ($nombreProducto);
    echo ("<br>");
    $marca = $_POST["marca"];
    echo ($marca);
    echo ("<br>");
    $precio = $_POST["precio"];
    echo ($precio);
    echo ("<br>");
    $descripcionProducto = $_POST["descripcionProducto"];
    echo ($descripcionProducto);
    $fotografia = $_POST["fotografia"];
    echo ($fotografia);

    $producto = new Producto($nombreProducto, $marca, $precio,  $descripcionProducto, $fotografia);
    //echo ($producto->registrar()); se quito

    //4.ejecutar el metodo insertar registro
    $baseDatos = new BaseDatos();
    $resultado = $baseDatos->insertarRegistro($producto->registrar());

    //5. valido el resultado
    if ($resultado) {

        $_SESSION['mensaje'] = "exito en el registro";
        //echo ("exito en el registro"); no es necesario
        header("Location:../views/registroProducto.php");
    } else {
        echo ("upps...tenemos un problema para registrar datos");
    }
} else {
    echo ("Error no hay productos");
}
