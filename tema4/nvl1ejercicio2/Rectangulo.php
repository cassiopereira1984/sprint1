<?php

require_once "Shape.php";

class Rectangulo extends Shape 
{
    public function area() {
        return ($this->alto * $this->ancho);
    }
}
?>