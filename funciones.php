<?php
class Funciones
{
    //LEE UN ARCHIVO TXT
    public function Leer($nombreArchivo)
    {
        $listaDeAlgo = array();

        if($nombreArchivo != " ")
        {
            $archivo = fopen($nombreArchivo, "a+");
            while(!feof($archivo))
            {
                $linea = fgets($archivo);
                $datos = explode(',',$linea);
                if(count($datos)>1)
                {
                    array_push($listaDeAlgo,$datos);
                }
            }
            fclose($archivo);
        }
        else
        {
            echo "<br>Se necesita un archivo para leer<br>";
        }
        return $listaDeAlgo;
    }

    public static function cantDeProdComercio($lista)
    {
        $respuesta = [];
        $listaParaIterar = $lista;
        $cantidad = 0;
        for ($i=0; $i < count($lista); $i++) { 
            for ($j=0; $j < count($listaParaIterar); $j++) { 
                if($listaParaIterar[$j]->comercio == $lista[$i]->comercio){
                    
                    $comercio = $listaParaIterar[$j];
                    $cantidad ++;
                }
                
            }
        }
        return $respuesta;
    }

    public static function prodPrecioMasBajo($producto,$lista)
    {
        $respuesta = [];
        $comerciosConEsosProductos = [];
        foreach ($lista as $key => $value) {
            if($value->producto == $producto){
                array_push($comerciosConEsosProductos,$value);
            }
        }
        $minimo = $comerciosConEsosProductos[0]->precio;
        
        for ($i=0; $i < count($comerciosConEsosProductos); $i++) {
           
            if($minimo > $comerciosConEsosProductos[$i]->precio){
                
                $minimo = $comerciosConEsosProductos[$i]->precio;
                $respuesta = $comerciosConEsosProductos[$i];
            }
        }
        return $respuesta;        
    }



}