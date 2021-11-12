<?php
if (!isset($_SESSION)) {
    session_start();
}

//1. Incluir el modelo de la BD
//   Incluir el modelo Empleado
include("../models/BaseDatos.php");
include("../models/Empleado.php");



//2.  Recoger los datos de la vista
if (isset($_POST["boton"])) {

    $nombres = $_POST["nombres"];
    echo ($nombres);
    echo ("<br>");
    $apellidos = $_POST["apellidos"];
    echo ($apellidos);
    echo ("<br>");
    $email = $_POST["email"];
    echo ("$email");
    echo ("<br>");
    $edad = $_POST["edad"];
    echo ($edad);
    echo ("<br>");
    $descripcion = $_POST["descripcion"];
    echo ($descripcion);
    echo ("<br>");
    $fotografia = $_POST["fotografia"];
    echo ($fotografia);

    $empleado = new Empleado($nombres, $apellidos, $email, $edad, $descripcion, $fotografia);
    //echo ($empleado->registrar());

    //4.ejecutar el metodo insertar registro
    $baseDatos = new BaseDatos();
    $resultado = $baseDatos->insertarRegistro($empleado->registrar());

    //5. valido el resultado
    if ($resultado) {

        $_SESSION['mensaje'] = "exito en el registro";
        //echo ("exito en el registro"); no es necesario
        header("Location:../views/registroUsuario.php");
    } else {
        echo ("upps...tenemos problemas para registrar datos");
    }
} else {
    echo ("no deberias estar aqui");
}
