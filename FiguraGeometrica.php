<?php
class FiguraGeometrica
{
    public $tipoFigura;
    public $lado1;

    // Set y get de tipoFigura
    public function settipofigura($tipofigura)
    {
        return $this->tipoFigura = $tipofigura;
    }

    public function gettipofigura()
    {
        return $this->tipoFigura;
    }

    // Set y get de Lado1
    public function setlado1($lado1)
    {
        return $this->lado1 = $lado1;
    }
    public function getlado1()
    {
        return $this->lado1;
    }

    // Constructor
    public function __construct($tipoFigura, $lado1)
    {
        $this->tipoFigura = $tipoFigura;
        $this->lado1 = $lado1;
    }

    public function __destruct()
    {
        $this->tipoFigura;
        $this->lado1;
    }

    // calcularArea Vacio a menos que necesite ser sobrescrito
    function calcularArea() {}
}
