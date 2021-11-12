<?php
if (!isset($_SESSION)) {
    session_start();
}

//1. Incluir el modelo de la BD
//   Incluir el modelo Empleado
include("../models/BaseDatos.php");
include("../models/Empleado.php");

//2. recibir el id a eliminar
$id = $_GET["id"];
//echo ("eliminando al jugador: " . $id); solo para probar

//creo un objeto (variable del modelo)
$empleado = new Empleado(null, null, null, null, null, null);

$baseDatos = new BaseDatos();
$resultado = $baseDatos->insertarRegistro($empleado->eliminar($id));

if ($resultado) {

    $_SESSION['mensaje'] = "exito eliminando al empleado";
    //echo ("exito en el registro"); no es necesario
    header("Location:../views/registroUsuario.php");
} else {
    echo ("upps...tenemos problemas para eliminar al jugador");
}
