<?php

require_once 'productos.php';

$lista = Producto::LeerProductos();



foreach ($lista as $key => $value) {
    //var_dump(json_encode($value->producto));
    $maximo = $value->precio;
    for ($i=0; $i < count($lista); $i++) { 
        
    }
}
for ($i=0; $i < count($lista); $i++) { 
    //var_dump($lista[$i+1]->precio);
}

//cantidad de productos por comercio
$cantidad = Funciones::cantDeProdComercio($lista);
var_dump($cantidad);

//DONDE SE ENCUENTRA EL PRECIO MAS BAJO
$masBajo = Funciones::prodPrecioMasBajo('Parlante JVC',$lista);
var_dump('El producto mas bajo se encuentra en:'.'<br> '.json_encode($masBajo));
        