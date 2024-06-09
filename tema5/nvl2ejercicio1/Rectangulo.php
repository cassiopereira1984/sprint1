<?php
require_once "Shape.php";
class Rectangulo extends Shape {
    public function calcularArea() {
        return ($this->alto * $this->ancho);
    }
}
?>