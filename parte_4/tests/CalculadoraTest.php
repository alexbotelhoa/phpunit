<?php

use PHPUnit\Framework\TestCase;
use App\Calculadora;

class CalculadoraTest extends TestCase
{
    public function testAtributosCalculadora()
    {
        $this->assertClassHasAttribute('valorA', Calculadora::class);
        $this->assertClassHasAttribute('valorB', Calculadora::class);
        $this->assertClassHasAttribute('operador', Calculadora::class);
        $this->assertClassHasAttribute('resultado', Calculadora::class);
    }

    /**
    * @depends testAtributosCalculadora
    */
    public function testMetodosCalculadora()
    {
        $this->assertTrue(method_exists(Calculadora::class,'getValorA'), "Falta o Método getValorA");
        $this->assertTrue(method_exists(Calculadora::class,'getValorB'), "Falta o Método getValorB");
        $this->assertTrue(method_exists(Calculadora::class,'getOperador'), "Falta o Método getOperador");
        $this->assertTrue(method_exists(Calculadora::class,'getResultado'), "Falta o Método getResultado");
    }

    /**
    * @depends testAtributosCalculadora
    */
    public function testConstrutorCalculadora()
    {
        $this->assertTrue(method_exists(Calculadora::class,'__construct'),"Falta o método construtor em Calculadora");

        // Verifica se construtor está atribuindo valores
        $calc = new Calculadora(4,2,"soma");
        $this->assertEquals(4,$calc->getValorA(),"Erro no Método getValorA");
        $this->assertEquals(2,$calc->getValorB(),"Erro no Método getValorB");
        $this->assertEquals("soma",$calc->getOperador(),"Erro no Método getOperador");

        // acesso aos atributos privados
        $this->assertFalse(isset($calc->valorA),"Atributo valorA deve ser privado");
        $this->assertFalse(isset($calc->valorB),"Atributo valorB deve ser privado");
        $this->assertFalse(isset($calc->operador),"Atributo operador deve ser privado");

    }

    /**
    * @depends testConstrutorCalculadora
    */
    public function testGetResultadoCalculadora()
    {
        $calc = new Calculadora(4,2,"soma");
        $this->assertEquals(6,$calc->getResultado(),"Erro no método getResultado");
        $calc = new Calculadora(2,3,"soma");
        $this->assertEquals(5,$calc->getResultado(),"Erro no método getResultado");
        $calc = new Calculadora(6,3,"subtrair");
        $this->assertEquals(3,$calc->getResultado(),"Erro no método getResultado");
        $calc = new Calculadora(6,3,"dividir");
        $this->assertEquals(2,$calc->getResultado(),"Erro no método getResultado");
        $calc = new Calculadora(2,3,"dividir");
        $this->assertEquals(2/3,$calc->getResultado(),"Erro no método getResultado");
        $calc = new Calculadora(4,0,"dividir");
        $this->assertEquals("Não é um número!",$calc->getResultado(),"Erro no método getResultado");
        $calc = new Calculadora(4,2,"multiplicar");
        $this->assertEquals(8,$calc->getResultado(),"Erro no método getResultado");
    }

    /**
    * @depends testGetResultadoCalculadora
    */
    public function testStaticCalculadora()
    {
        $resultado = Calculadora::calcular(2,4,"soma");
        $this->assertEquals(6,$resultado,"Erro no método Estático calcular");
    }



}
