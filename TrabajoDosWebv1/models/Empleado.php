<?php
class Empleado
{


    //VARIABLES=DATOS=ATRIBUTOS
    public $nombres;
    public $apellidos;
    public $email;
    public $edad;
    public $descripcion;
    public $foto;


    //METODO ESPECIAL CONSTRUCTOR
    public function __construct($nombresFormulario, $apellidosFormulario, $emailFormulario, $edadFormulario, $descripcionFormulario, $fotoFormulario)
    {

        $this->nombres = $nombresFormulario;
        $this->apellidos = $apellidosFormulario;
        $this->email = $emailFormulario;
        $this->edad = $edadFormulario;
        $this->descripcion = $descripcionFormulario;
        $this->foto = $fotoFormulario;
    }

    //ACCIONES=FUNCIONES=METODOS

    public function registrar()
    {

        $consultaSQL = "INSERT INTO empleados(nombres,apellidos,email,edad,descripcion,foto) 
            VALUES ('$this->nombres','$this->apellidos',' $this->email','$this->edad','$this->descripcion','$this->foto')";

        return $consultaSQL;
    }

    public function buscar()
    {

        $consultaSQL = "SELECT * FROM empleados";
        return $consultaSQL;
    }

    public function eliminar($id)
    {
        $consultaSQL = "DELETE FROM empleados WHERE id='$id'";
        return $consultaSQL;
    }

    public function editar($id)
    {

        $consultaSQL = "UPDATE empleados SET email='$this->email',nombres='$this->nombres',edad='$this->edad'WHERE id='$id'";

        return $consultaSQL;
    }
}
