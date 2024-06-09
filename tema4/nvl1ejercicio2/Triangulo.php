<?php

require_once "Shape.php";

class Triangulo extends Shape 
{
    public function area() {
        return ($this->alto * $this->ancho) / 2;
    }
}
?>