<?php
/*Escriu un programa que defineixi una classe Shape amb un constructor que rebi com a paràmetres l'ample i alt. 
Defineix dues subclasses; Triangle i Rectangle que heretin de Shape i que calculin respectivament l'àrea de la 
forma area().

Important
Si, és el mateix exercici que a POO1, però aquí necessitem que ho resolguis aplicant algun dels conceptes del 
tema POO2.*/

require_once "Triangulo.php";
require_once "Rectangulo.php";

$triangulo = new Triangulo (10, 20);
echo "La area del triangulo es: " . $triangulo->calcularArea();

$rectangulo = new Rectangulo(10, 20);
echo "La area del rectangulo es: " . $rectangulo->calcularArea();
?>