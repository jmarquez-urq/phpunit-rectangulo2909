<?php
namespace App;

class Rectangulo
{
    private $base;
    private $altura;

    public function __construct($b, $a)
    {
        if ($b <= 0 || $a <= 0) {
            throw new \Exception();
        }
        $this->base = $b;
        $this->altura = $a;
    }

    public function getBase()
    {
        return $this->base;
    }

    public function getAltura()
    {
        return $this->altura;
    }

    public function calcularArea()
    {
        return $this->base * $this->altura;
    }

    public function calcularPerimetro()
    {
        return $this->base * 2 + $this->altura * 2;
    }

    public function esCuadrado()
    {
        return ($this->base === $this->altura);
    }
}
