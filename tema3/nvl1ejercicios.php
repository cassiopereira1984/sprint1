<?php
/*Exercici 1
Crea un array, afegeix-li 5 nombres enters i després mostrals per pantalla d’un en un.*/
$n = array(2, 4, 5, 8, 14);
echo $n[0] . $n[1] . $n[2] . $n[3] . $n[4];
foreach($n as $array){
    echo $array;    
}
print_r($n);

/*Exercici 2
$X = array (10, 20, 30, 40, 50,60);
Mostrar per pantalla la mida de l’array anterior i posteriorment elimina un element de l’array anterior. 
Després d'eliminar l'element, les claus senceres han de ser normalitzades(s’han de reorganitzar els seus índexs). 
Mostra per última vegada la mida de l’array.*/
$x = array (10, 20, 30, 40, 50, 60);
$y = count($x);
echo "El tamaño de la array es de " . $y . "\n";

unset($x[3]);
$x = array_values($x);
$z = count($x);
echo "El tamaño de la array es de " . $z . "\n";

print_r($x);

/*Exercici 3
Crea una funció que rebi com a paràmetres un array de paraules i un caràcter. La funció ens retorna true si 
totes les paraules de l’array tenen el caràcter passat com a segon paràmetre.

Per exemple:

Si tenim [“hola”, “Php”, “Html”] retornarà true si preguntem per “h” però fals si preguntem per “l”.*/

function busquedaLetra($letra, $arrayPalabras) {
    foreach($arrayPalabras as $palabra) {   
        $encontrada = false;
        for($i = 0; $i < strlen($palabra); $i++) {
            if ($palabra[$i] === $letra) {
                $encontrada = true;
            }
        }
    }
    return $encontrada; 
}

$letra = "h";
$arrayPalabras = ["ola", "pp", "html"];

if(busquedaLetra($letra, $arrayPalabras)) {
    echo "Todas las palabras continen la letra: " . $letra;
} else {
    echo "NO todas las palabras contiene la letra: " . $letra;
}

/*- Exercici 4
Fes un array associatiu que representi informació de tu mateix/a. En concret ha d’incloure:

nom
edat
email
menjar*/
$array = array("nombre" => "Cassio", "edat" => "40", "email" => "cas@cas.com", "menjar" => "bbq");

echo $array["nombre"] . "\n";
echo $array["edat"] . "\n";
echo $array["email"] . "\n";
echo $array["menjar"];

print_r($array);

foreach ($array as $echo){
    echo $echo . "\n";
}

?>