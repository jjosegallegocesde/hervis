<?php
class Producto
{
    //VARIABLES=DATOS=ATRIBUTOS
    public $nombreProducto;
    public $marca;
    public $precio;
    public $descripcionProducto;
    public $foto;


    //METODO ESPECIAL CONSTRUCTOR
    public function __construct($nombresFormulario, $marcaFormulario, $precioFormulario, $descripcionFormulario, $fotoFormulario)
    {

        $this->nombreProducto = $nombresFormulario;
        $this->marca = $marcaFormulario;
        $this->precio = $precioFormulario;
        $this->descripcionProducto = $descripcionFormulario;
        $this->foto = $fotoFormulario;
    }

    //ACCIONES=FUNCIONES=METODOS

    public function registrar()
    {

        $consultaSQL = "INSERT INTO productos(nombreProducto,marca,precio,descripcionProducto,foto) 
            VALUES ('$this->nombreProducto','$this->marca',' $this->precio','$this->descripcionProducto','$this->foto')";

        return $consultaSQL;
    }

    public function buscar()
    {

        $consultaSQL = "SELECT * FROM productos";
        return $consultaSQL;
    }

    public function eliminar($id_producto)
    {
        $consultaSQL = "DELETE FROM productos WHERE id_producto='$id_producto'";
        return $consultaSQL;
    }

    public function editar($id_producto)
    {

        $consultaSQL = "UPDATE productos SET precio='$this->precio',nombreProducto='$this->nombreProducto',marca='$this->marca',descripcionProducto='$this->descripcionProducto',foto='$this->foto' WHERE id_producto='$id_producto'";

        return $consultaSQL;
    }
}
