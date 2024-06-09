<?php
/*- Exercici 1
Escriu una funció que determini la quantitat total a pagar per una trucada telefònica segons les següents premisses:

Tota trucada que duri menys de 3 minuts té un cost de 10 cèntims.
Cada minut addicional a partir dels 3 primers és un pas de comptador i costa 5 cèntims.*/
function llamada($tempLlamada = 3) {
    if ($tempLlamada > 3) {
        $costeLlamada =  (($tempLlamada - 3) * 5) + 10;
        echo "El coste de la llamada es de: " . $costeLlamada . "cents";
    } else {
        echo "El coste de la llamada es de: 10cents.";  
    }
}
echo llamada() . PHP_EOL;;

/*- Exercici 2
Imagina que som a una botiga on es ven:

Xocolata: 1 euro
Xiclets: 0,50 euros
Caramels: 1,50 euros
Implementa un programa que permeti afegir càlculs a un total de compres d'aquest tipus. Per exemple, que si comprem:

2 xocolates, 1 de xiclets i 1 de caramels, tinguem un programa que permeti anar afegint els subtotals a un total, tal que així:

funció(2 xocolates) + funció(1 de xiclets) + funció(1 de carmels) = 2 + 0.5 + 1.5

Sent, per tant, el total, 4.*/

define("CHOCO", 1);
define("CHICLE", 0.5);
define("CARAMELO", 1.5);

function calcularProducto($cantidad, $producto)
{   
    return $cantidad * $producto;
}

$total = 0;

$total += calcularProducto(2, CHOCO);
$total += calcularProducto(1, CHICLE);
$total += calcularProducto(1, CARAMELO);

echo "El total es de: " . $total . " euros." . PHP_EOL

?>