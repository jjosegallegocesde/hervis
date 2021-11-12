<?php

//1. Incluir el modelo de la BD
//   Incluir el modelo Empleado
include("../models/BaseDatos.php");
include("../models/Empleado.php");

//2. Creo un objeto(variable) del modelo EMPLEADO
$empleado = new Empleado(null, null, null, null, null, null);

//4. Ejecutar el metodo buscar registro de la bd
$baseDatos = new BaseDatos();
$empleados = $baseDatos->buscarRegistros($empleado->buscar());

//print_r($empleados);
