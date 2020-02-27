<?php
namespace App;

class Calculadora
{
    private $valorA;
    private $valorB;
    private $operador;
    private $resultado;

    public function __construct($valorA,$valorB,$operador)
    {
        $this->valorA = $valorA;
        $this->valorB = $valorB;
        $this->operador = $operador;
    }

    public function getValorA()
    {
        return $this->valorA;
    }
    public function getValorB()
    {
        return $this->valorB;
    }
    public function getOperador()
    {
        return $this->operador;
    }
    public function getResultado()
    {
        if($this->getOperador() == "soma"){
          return $this->getValorA() + $this->getValorB();
        }elseif($this->getOperador() == "dividir"){
          if($this->getValorB() == 0){
            return "Não é um número!";
          }
          return $this->getValorA() / $this->getValorB();
        }elseif($this->getOperador() == "multiplicar"){
          return $this->getValorA() * $this->getValorB();
        }
        return $this->getValorA() - $this->getValorB();
    }
    
    public static function calcular($valorA,$valorB,$operador)
    {
        $calc = new Calculadora($valorA,$valorB,$operador);
        return $calc->getResultado();
    }

}
