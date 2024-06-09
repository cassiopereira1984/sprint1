<?php
/*- Exercici 1
Donat un array d’enters, fes un programa que:

Retorni cada valor de l’array elevat al cub fent servir la funció array_map().*/

function sumCubo(int $n): int {
    return $n**3;
}

$array = [1, 2, 3, 4, 5, 6];


    // el array_map() se encarga de aplicar la funcion a la array.
$arraymap = array_map('sumCubo', $array);

echo "El cubo de la Array es: " . PHP_EOL;
print_r($arraymap);

/*- Exercici 2
Donat un array d’strings, fes un programa que:

Retorni un array on només estiguin els strings que tinguin un nom parell de caràcters usant la 
funció array_filter().*/

function esPar(string $string): bool {
    return strlen($string) % 2 === 0;
}

$array = ["Hola", 'Comida', 'Ropa', 'Raton', 'Leche'];

    //el array_filter ocupase de chequear que los elementos sean los que pase la function;
$arrayfilter = array_filter($array, 'esPar');
$arrayValues = array_Values($arrayfilter);

echo "Las palabras con silabas pares son: " . PHP_EOL;
print_r($arrayValues);

/*- Exercici 3
Donat un array d’enters, fes un programa que ens retorni la suma dels enters de l’array que siguin primers fent 
servir la funció array_reduce().*/

function sumArray(int $carry, int $item): int {
    return $carry + $item;
}

$array = [1, 2, 3, 4, 5, 6];

    //el array_reduce encargase de sumar o concatenar tods los elementos de un array. El ultimo campo pasa el valor inicial de la suma.
$arrayReduce = array_reduce($array, 'sumArray', 0);

echo "La suma de la array es: " . PHP_EOL; 
print_r($arrayReduce);

?>