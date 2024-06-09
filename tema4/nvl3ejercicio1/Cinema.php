<?php

class Cinema {
    private string $nombreCinema;
    private string $ubicacion;
    private array $catalogo = [];

    public function __construct($nombreCinema, $ubicacion) {
        $this->nombreCinema = $nombreCinema;
        $this->ubicacion = $ubicacion;
        $this->catalogo = [];
    }

    public function agregarPelicula($pelicula) {
        $this->catalogo[] = $pelicula;
    }

    public function mostrarPelicula() {
        echo $this->nombreCinema . " tiene en cartel:" . PHP_EOL;
        foreach($this->catalogo as $pelicula) {
            echo "Nombre: " . $pelicula->nombrePelicula . PHP_EOL . "Duracion: " . $pelicula->duracion . PHP_EOL . "Director: " . $pelicula->director . PHP_EOL;
        }
    }

    public function peliculaMasLarga() {
        echo $this->nombreCinema . " la pelicula mas larga es:" . PHP_EOL;
        $peliculaLarga = null;
        $duracionLarga = 0;
        foreach($this->catalogo as $duracion) {
            if($duracion->duracion > $duracionLarga) {
                $peliculaLarga = $duracion->nombrePelicula;
                $duracionLarga = $duracion->duracion;
            }
        }
        echo "Nombre: " . $peliculaLarga . PHP_EOL . "Duracion: " . $duracionLarga;
    }

    public function busquedaDirector($director)  {
        $array_pelicula = [];
        foreach($this->catalogo as $pelicula) {
            if($pelicula->director === $director) {
                $array_pelicula[$pelicula->nombrePelicula] = true;
            }
        }
        echo $this->nombreCinema . " las peliculas del director: " . $director . " son: ". PHP_EOL;
        foreach(array_keys($array_pelicula) as $pelicu) {
            echo $pelicu . PHP_EOL;
        }
    }
}

?>