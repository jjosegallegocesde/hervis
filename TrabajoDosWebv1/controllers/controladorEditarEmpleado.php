<?php
if (!isset($_SESSION)) {
    session_start();
}

//1. Incluir el modelo de la BD
//   Incluir el modelo Empleado
include("../models/BaseDatos.php");
include("../models/Empleado.php");

if (isset($_POST["botonEditar"])) {


    $email = $_POST["email"];
    echo ("$email");
    $nombres = $_POST["nombres"];
    echo ("$nombres");
    $edad = $_POST["edad"];
    echo ("$edad");
    //Recibir el id
    $id = $_GET["id"];

    //Recibo datos a editar
    $empleado = new Empleado($nombres, null, $email, $edad, null, null);
    //echo ($empleado->registrar());


    //4.ejecutar el metodo insertar registro
    $baseDatos = new BaseDatos();
    $resultado = $baseDatos->insertarRegistro($empleado->editar($id));

    //5. valido el resultado
    if ($resultado) {

        $_SESSION['mensaje'] = "exito editando los datos del empleado";
        //echo ("exito en el registro"); no es necesario
        header("Location:../views/registroUsuario.php");
    } else {
        echo ("upps...tenemos problemas para registrar datos");
    }
}
