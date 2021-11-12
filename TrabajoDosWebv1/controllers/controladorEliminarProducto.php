<?php
if (!isset($_SESSION)) {
    session_start();
}

//1. Incluir el modelo de la BD
//   Incluir el modelo Empleado
include("../models/BaseDatos.php");
include("../models/Producto.php");

//2. recibir el id a eliminar
$id_producto = $_GET["id_producto"];
//echo ("eliminando al jugador: " . $id); solo para probar

//creo un objeto (variable del modelo)
$producto = new Producto(null, null, null, null, null);

$baseDatos = new BaseDatos();
$resultado = $baseDatos->insertarRegistro($producto->eliminar($id_producto));

if ($resultado) {

    $_SESSION['mensaje'] = "exito eliminando al producto";
    //echo ("exito en el registro"); no es necesario
    header("Location:../views/registroProducto.php");
} else {
    echo ("upps...tenemos problemas para eliminar al producto");
}
