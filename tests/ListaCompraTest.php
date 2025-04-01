<?php

namespace Deg540\DockerPHPBoilerplate\Test;

use Deg540\DockerPHPBoilerplate\ListaCompra;
use PHPUnit\Framework\TestCase;

class ListaCompraTest extends TestCase
{
    /**
     * @test
     */
    public function añadirListaCompra(){
        $listaCompra = new ListaCompra();

        $result = $listaCompra->estadoActual("añadir pan 3");

        $this->assertEquals("pan 3", $result);
    }
    /**
     * @test
     */
    public function vaciarListaCompra(){
        $listaCompra = new ListaCompra();

        $result = $listaCompra->estadoActual("vaciar");

        $this->assertEquals(" ", $result);
    }
}
