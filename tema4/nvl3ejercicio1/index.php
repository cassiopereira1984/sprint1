<?php
/*Exercici 1
Imagina que has de presentar el catàleg de pel·lícules d'una cadena de cinemes. Cada cinema té un nom, una 
població a on pertany, i un llistat de pel·lícules. Cada pel·lícula té un nom, una duració, i un director/a.

Es tracta de fer un programa que ens permeti enregistrar aquesta informació per a després:

Per a cada cinema, mostrar les dades de cada pel·lícula.
Per a cada cinema, mostrar la pel·lícula amb major duració.
Implementa una funció que cerqui pel nom del director/a pel·lícules en diferents cinemes. No cal repetir 
pel·lícules.
A més, pots aprofitar aquest exercici per treballar una bona presentació amb HTML+CSS que doni suport a la 
lògica.*/

require 'Cinema.php';
require 'Pelicula.php';

$cine1 = new Cinema("Cine Floridablanca", "Barcelona");
$cine2 = new Cinema("Cine Alvorada", "Porto Alegre");
$cines = [$cine1, $cine2];

$cine1->agregarPelicula(new Pelicula("Titan", 20, "Albert"));
$cine1->agregarPelicula(new Pelicula("Casiopea", 34, "Davi"));
$cine1->agregarPelicula(new Pelicula("Minotaoro", 44, "Albert"));
$cine2->agregarPelicula(new Pelicula("Medusa", 55, "Joaquin"));
$cine2->agregarPelicula(new Pelicula("Hercules", 66, "Miguel"));
$cine2->agregarPelicula(new Pelicula("Zeus", 77, "Albert"));

foreach($cines as $cine) {
    echo $cine->busquedaDirector("Albert");
}

/*
class Pelicula {
    function __construct($nombrePelicula, $duracion, $director) {
        $this->nombrePelicula = $nombrePelicula;
        $this->duracion = $duracion;
        $this->director = $director;
    }
}

class Cinema {
    function __construct($nombreCinema, $ubicacion) {
        $this->nombreCinema = $nombreCinema;
        $this->ubicacion = $ubicacion;
        $this->catalogo = [];
    }

    function agregarPelicula($pelicula) {
        $this->catalogo[] = $pelicula;
    }

    function mostrarPelicula() {
        echo "Las Peliculas del Cinema: " . $this->nombreCinema . " son:" . PHP_EOL;
        foreach($this->catalogo as $pelicula) {
            echo "Nombre: " . $pelicula->nombrePelicula . PHP_EOL . "Duracion: " . $pelicula->duracion . PHP_EOL . "Director: " . $pelicula->director;
        }
    }

    function peliculaMasLarga() {
        $peliculaMasLarga = null;
        $tiempo = 0;
        foreach($this->catalogo as $pelicula) {
            if($pelicula->duracion > $tiempo) {
                $tiempo = $pelicula->duracion;
                $peliculaMasLarga = $pelicula->nombrePelicula;
            }
        }
        echo "La Pelicula mas larga en el Cinema " . $this->nombreCinema . " es: " . $peliculaMasLarga;
    }

    function busquedaDirector($director) {
        $array_director = [];
        foreach($this->catalogo as $pelicula) {
            if($pelicula->director === $director) {
                $array_director[$pelicula->nombrePelicula] = true;
            }
        }
        echo "En el Cinema " .  $this->nombreCinema . " las peliculas del director " . $director . " son: " . PHP_EOL;
        foreach(array_keys($array_director) as $peliculas) {
            echo "Nombre: " . $peliculas . PHP_EOL;
        }
    }
}

$cine1 = new Cinema("Cine Aribau", "Barcelona");
$cine2 = new Cinema("Cine Calao", "Madrid");

$cines = [$cine1, $cine2];

$cine1->agregarPelicula(new Pelicula("Titanic", 120, "James Cameron"));
$cine1->agregarPelicula(new Pelicula("Oreon", 100, "Jaen Arthur"));
$cine1->agregarPelicula(new Pelicula("Titan", 90, "James Cameron"));
$cine2->agregarPelicula(new Pelicula("David", 100, "Jaen Arthur"));
$cine2->agregarPelicula(new Pelicula("Adamann Tiror", 100, "Erick Arthur"));
$cine2->agregarPelicula(new Pelicula("Alameda", 100, "Jaen Firnest"));

foreach($cines as $cine) {
    echo $cine->busquedaDirector("James Cameron");
}*/
?>