<?php
require_once 'funciones.php';
class Producto 
{
    
    public $id;
    public $producto;
    public $precio;
    public $comercio;
    public $promocion;

    public function __construct($id,$producto,$precio,$comercio,$promocion)
    {
        $this->id = $id;
        $this->producto = $producto;
        $this->precio = $precio;
        $this->comercio = $comercio;
        $this->promocion = $promocion;
    }

    public function __get($name)
    {
        echo $this->$name;
    }

    public function __set($name, $value)
    {

        $this->$name = $value;
    }


    public static function LeerProductos()
    {
        $productosLeidos = Funciones::Leer('data-exisoft.csv');
        $listaProductos = array();
        if(count($productosLeidos)>0)
        {
            foreach ($productosLeidos as $key => $value) 
            {
                if(count($value)>0)
                {
                    $producto = new Producto($value[0],$value[1],$value[2],$value[3],$value[4]);
                    array_push($listaProductos,$producto);
                }
            }
        }
        return $listaProductos;
    }
}