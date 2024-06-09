<?php

class Pelicula 
{
    protected string $nombrePelicula;
    protected int $duracion;
    protected string $director;

    public function __construct($nombrePelicula, $duracion, $director) {
        $this->nombrePelicula = $nombrePelicula;
        $this->duracion = $duracion;
        $this->director = $director;
    }
}

?>