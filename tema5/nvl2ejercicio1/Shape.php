<?php
 abstract class Shape {
    public float $ancho;
    public float $alto;

    public function __construct($ancho, $alto) {
        $this->ancho = $ancho;
        $this->alto = $alto;
    }
    abstract public function calcularArea();
 }
?>