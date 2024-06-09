<?php
/*Escriu un programa que defineixi una classe Shape amb un constructor que rebi com a paràmetres l'ample i alt.
 Defineix dues subclasses; Triangle i Rectangle que heretin de Shape i que calculin respectivament l'àrea de la 
 forma area().*/
 
require_once "Triangulo.php";
require_once "Rectangulo.php";

$triangulo = new Triangulo (10, 20);
echo "La area de triangulo es: " . $triangulo->area();

$rectangulo = new Rectangulo(10, 20);
echo "La area de rectangulo es: " . $rectangulo->area();
?>