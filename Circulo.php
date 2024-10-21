<?php

include("./FiguraGeometrica.php");

class Circulo extends FiguraGeometrica
{
    public $PI = 3.1415;

    public function __construct() {}

    public function __destruct()
    {
        return "
        <p>El área del {$this->tipoFigura} es {$this->calcularArea()} ^2 </p>
        <p>El perímetro es {$this->calcularPerimetre()} </p>
        ";
    }

    public function calcularArea()
    {
        $up2 = $this->lado1 * $this->lado1;
        $area = $this->PI * $up2;
        return $area;
    }

    public function calcularPerimetre()
    {
        $perimetro = 2 * $this->PI * $this->lado1;
        return $perimetro;
    }

    public function __toString()
    {
        return "
        <marques><p>El área del  es {$this->calcularArea()} ^2 </p>
        <p>El perímetro es {$this->calcularPerimetre()} </p>
        ";
    }
}

$Circulo = new Circulo();
$Circulo->setLado1($_POST['lado1']);

echo $Circulo->__destruct();

// echo "toString; <br>" . $Circulo;
