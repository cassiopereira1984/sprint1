<?php
require_once "Shape.php";
class Triangulo extends Shape {
    public function calcularArea() {
        return ($this->alto * $this->ancho) / 2;
    }
}
?>