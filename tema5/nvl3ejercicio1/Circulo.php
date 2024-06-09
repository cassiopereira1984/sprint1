<?php
require_once "Shape.php";
class Circulo implements Shape {
    public function __construct($radio) {
        $this->radio = $radio;
    } 
    public function calcularArea() {
        return (2 * 3.14) * $this->radio;
    }
}
?>