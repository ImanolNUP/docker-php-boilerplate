<?php

namespace Deg540\DockerPHPBoilerplate;

class ListaCompra
{
    private array $lista = [];
    function estadoActual(String $estado): string
    {
        $estadoExplode = explode(" ", $estado);
        if($estadoExplode[0] == "añadir")
        {
            $posicion = array_search($estadoExplode[1], $this->lista);
            if($posicion !== false)
            {
                $listaExplode = explode(" ", $this->lista[$posicion]);
                $this->lista[$posicion] = $listaExplode[0]." ".strval(intval($estadoExplode[2]) + intval($listaExplode[1]));
            }
            else
            {
                $longitud = count($this->lista);
                $this->lista[$longitud+1] = $estadoExplode[1]." ".$estadoExplode[2];
                natcasesort($this->lista);
            }
            return implode(" ,", $this->lista);
        }
        elseif($estadoExplode[0] == "eliminar")
        {

        }
        elseif($estadoExplode[0] == "vaciar")
        {

        }
    }
}