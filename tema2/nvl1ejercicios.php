<?php

// EJERCICIO1 Defineix una variable de cada tipus: integer, double, string i boolean. Imprimeix-les per pantalla.
$integer = 12;
$double = 34.54;
$string = "Hola mundo";
$boolean = false;

echo $integer . " " . $double . " " . $string . " " . $boolean;

//Després crea una constant que inclogui el teu nom i mostra-ho en format títol per pantalla.
define("NOMBRE", "Mi nombre es Cassio, gracias");
$titulo = ucwords(NOMBRE);

echo $titulo;

//EJERCICIO 2 Imprimeix per pantalla "Hello, World!" utilitzant una variable
$hello = "Hello World";
echo $hello;

//Transforma tots els caràcters de l'string a majúscules i imprimeix en pantalla.
echo strtoupper($hello);
//echo strtolower($hello);

//Imprimeix per pantalla l'string en ordre invers de caràcters
echo strrev($hello);

//Imprimeix per pantalla la mida (longitud) de la variable
echo strlen($hello);

/*o	Crea una nova variable amb el contingut “Aquest és el curs de PHP” i imprimeix per 
pantalla la concatenació de tots dos strings.*/
$curso = " Aquest és el curs de PHP.";
echo $hello . $curso;

/*EJERCICIO 3 Declara dues variables X i Y de tipus int, dues variables N i M de tipus double i 
assigna a cadascuna un valor. A continuació, mostra per pantalla per a X i Y:*/
$X = 4;
$Y = 5;
$N = 6.5;
$M = 7.5;

//El valor de cada variable.
echo "Las variables son " . $X . " " . $Y . " " . $N . " " . $M;

//La suma.
echo "la suma es " . ($X + $Y);
echo "la suma es " . ($N + $M);

//La resta.
echo "la resta es " . ($X - $Y);
echo "la resta es " . ($N - $M);

//El producte.
echo "la multi es " . ($X * $Y);
echo "la multi es " . ($N * $M);

//El mòdul
echo "el modulo es " . ($X % $Y);
echo "el modulo es " . ($N % $M);

//Per a totes les variables (X, Y, N, M):
//El doble de cada variable.
echo "el doble de la variable X es " . ($X * 2);
echo "el doble de la variable Y es " . ($Y * 2);
echo "el doble de la variable N es " . ($N * 2);
echo "el doble de la variable M es " . ($M * 2);

//La suma de totes les variables.
echo "la suma de todas las variables es " . ($X + $Y + $N + $M);

//El producte de totes les variables.
echo "La multiplicacion de la variable X es " . ($X * $X);
echo "La multiplicacion de la variable Y es " . ($Y * $Y);
echo "La multiplicacion de la variable N es " . ($N * $N);
echo "La multiplicacion de la variable M es " . ($M * $M);

/*Crea una funció Calculadora que entri dos nombres per paràmetre, 
i en un tercer paràmetre et permeti fer la suma, la resta, la multiplicació o la divisió dels dos nombres.*/
$a = 1;
$b = 2;
$mate = "+";
function calculadora($a, $b, $mate) {
    if ($mate == "+") {
        $resultado = ($a + $b);
    } else if ($mate == "-") {
        $resultado = ($a + $b);
    } else if ($mate == "*") {
        $resultado = ($a * $b);
    } else if ($mate == "/") {
        $resultado = ($a / $b);
    }
    return $resultado;
}
$resultado = calculadora($a, $b, $mate);
echo "El resultado de la " . $mate . $resultado;

/*Fes un programa que implementi una funció on es compti fins a un nombre determinat. Si no s’inclou un 
nombre determinat, el nombre haurà de tenir un valor per defecte igual a 10. A més, aquesta funció ha de tenir 
un segon paràmetre que indiqui de quant a quant es compta(D'1 en 1, de 2 en 2…). El compte s’ha de mostrar per 
pantalla pas per pas.*/
$nUser = 10;
$incremento = 1;
function cuenta($nUser, $incremento) {
    $n = 1;
    while ($n <= $nUser) {
        echo $n . " + " . $incremento;
        $n += $incremento;
        echo " = " . $n . "\n"; 
    }
}
echo cuenta($nUser, $incremento);

/*$n = 0;
$nUser;
if ($nUser > 10) {
    $while($n <= $nUser) {
        echo $n;
        $n+2;
        echo " + 2 " . $n;
    }
} else {
    $while($n <= 10) {
        echo $n;
        $n+2;
        echo " + 2 " . $n;
    }
}*/
/*EJERCICIO 5 Escriure una funció per verificar el grau d'un/a estudiant d'acord amb la nota.
Condicions:
Si la nota és 60% o més, el grau hauria de ser Primera Divisió.
Si la nota està entre 45% i 59%, el grau hauria de ser Segona Divisió.
Si la nota està entre 33% to 44%, el grau hauria de ser Tercera Divisió.
Si la nota és menor a 33%, l'estudiant reprovarà.*/
$nota;
function nota($nota) {
    if ($nota >= 60) {
        $resp = "Primera Divisió";
    } else if ($nota >= 45 && $nota <= 59) {
        $resp = "Segona Divisió";
    } else if ($nota >= 33 && $nota <= 44) {
        $resp = "   Tercera Divisió";
    } else if ($nota <= 32) {
        $resp = "Reprovat";
    }
    return $resp;
}
echo "Es un estudiente de " . nota($nota);

/*EjERCICIO 6 Charlie em va mossegar el dit! Charlie et mossegarà el dit exactament el 50% del temps.
o	Escriu La funció isBitten () que retorna TRUE amb un 50% de probabilitat i FALSE en cas contrari.*/
$var = rand(1, 100);
function isBitten($var) {
    $bite = ($var >= 50) ? "Charlie em va mossegar el dit!" : "Charlie et mossegarà el dit";
    return $bite;
}
echo isBitten($var);
?>