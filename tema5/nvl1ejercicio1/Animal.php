<?php
abstract class Animal {
    private $nombre;

    function __construct($nombre) {
        $this->nombre = $nombre;
    }

    function getNombre() {
        return $this->nombre;
    }
}
?>