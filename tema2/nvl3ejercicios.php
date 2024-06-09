<?php
/*- Ejercicio 1
La criba de Eratóstenes es un algoritmo pensado para encontrar números primos dentro de un intervalo dado. Basándote 
en la información del enlace adjunto, implementa la criba de Eratóstenes dentro de una función, de tal forma que 
podamos invocar la función para un número concreto.

 Para saber más

-> Criba de Eratóstenes*/

function cribaEratostenes($n) {
    $array = [];

    for($i = $n; $i >= 2; $i--) {
        $array[$i] = true;
    }

    for ($p = 2; $p * $p <= $n; $p++) {
        if ($array[$p]) {
            for ($i = $p * $p; $i <= $n; $i += $p) {
                $array[$i] = false;
            }
        }
    }

    echo "Números primos hasta $n: ";
    foreach ($array as $i => $v) {
        if ($v) {
            echo $i . " ";
        }
    }
}

cribaEratostenes(10);

?>
