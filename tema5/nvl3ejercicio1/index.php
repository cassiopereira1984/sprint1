<?php
/*- Exercici 1
Seguint l’exercici anterior, imagina com ampliaries l’estructura que has creat per representar un Cercle i 
el seu corresponent càlcul d’àrea.*/
require_once "Triangulo.php";
require_once "Rectangulo.php";
require_once "Circulo.php";

$triangulo = new Triangulo(10, 20);
echo "La area del triangulo es: " . $triangulo->calcularArea();

$rectangulo = new Rectangulo(10, 20);
echo "La area del rectangulo es: " . $rectangulo->calcularArea();

$circulo = new Circulo(5);
echo "La area del circulo es: " . $circulo->calcularArea();
?>