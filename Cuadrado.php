<?php
require_once 'FiguraGeometrica.php';

class Cuadrado extends FiguraGeometrica
{

    public function __construct($lado1)
    {
        $this->tipoFigura = ('Cuadrado');
        $this->lado1 = $lado1;
    }
    public function __destruct()
    {
        return 'Destruido';
    }

    public function calcularArea()
    {
        return $this->lado1 * $this->lado1;
    }
    public function calcularPerimetro()
    {
        return 4 * $this->lado1;
    }
    public function __toString()
    {

        return "El area es: " . $this->calcularArea() . "<br> El perimetro es: " . $this->calcularPerimetro();
    }
}
