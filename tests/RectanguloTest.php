<?php
//Las clases de testing son subclases de TestCase:
class RectanguloTest extends \PHPUnit\Framework\TestCase
{
    //Cualquier método que comience con "test" será considerado
    //un test por phpUnit:
    public function testSePuedeConstruirYObtenerMedidas()
    {
        $r = new \App\Rectangulo(5,4);
        $this->assertEquals(5, $r->getBase());
        $this->assertEquals(4, $r->getAltura());
    }

    public function testNoSePuedeCrearRectanguloConMedidasNegativas()
    {
        $this->expectException(\Exception::class);
        //Lanzará una excepción, porque la base no puede ser cero:
        $r = new \App\Rectangulo(0,4);
    }

    public function testCalculaBienElPerimetro()
    {
        $r = new \App\Rectangulo(5,4);
        $this->assertEquals(18, $r->calcularPerimetro());
    }

    public function testCalculaBienElArea()
    {
        $r = new \App\Rectangulo(5,4);
        $this->assertEquals(20, $r->calcularArea());
    }

    public function testDetectaSiEsCuadrado() {
        //Construimos un rectángulo que no es cuadrado:
        $r = new \App\Rectangulo(5,4);
        //esCuadrado() retornará FALSE:
        $this->assertFalse($r->esCuadrado());

        //Construimos otro rectángulo que no es cuadrado:
        $r = new \App\Rectangulo(3,40);
        //esCuadrado() retornará FALSE:
        $this->assertFalse($r->esCuadrado());

        //Construimos un rectángulo que sí es cuadrado:
        $c = new \App\Rectangulo(5,5);
        //esCuadrado() retornará TRUE:
        $this->assertTrue($c->esCuadrado());
    }
}
