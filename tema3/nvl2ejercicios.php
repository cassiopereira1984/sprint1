<?php
/*Exercici 1
Crea un programa que contingui dos arrays de nombres enters/floats. Un cop creats, mostra per pantalla el 
resultat de:

La intersecció dels dos arrays (nombres en comú)
La mescla dels dos arrays.*/
$array1 = array(12, 51, 20.5);
$array2 = array(15, 51, 54.5);

//La intersecció dels dos arrays (nombres en comú)
$interseccion = array_intersect($array1, $array2);
echo "Los numeros en comun entre las arrays son:";
print_r($interseccion);

//La mescla dels dos arrays.
$mescla = array_merge($array1, $array2);
$mescla2 = $array2 + $array1;
print_r($mescla);
echo "\n";
print_r($mescla2);


/*- Exercici 2
Crea un programa que llisti les notes dels/les alumnes d’una classe. Per això haurem d’utilitzar un array 
associatiu on la clau serà el nom de cada alumne. Cada alumne tindrà 5 notes (valorades del 0 al 10).

A més, crea una funció que, donades les notes de tots els/les alumnes, ens mostri tant la mitjana de la 
nota de cada alumne, com la nota mitjana de la classe sencera.*/
$alumnos = array("Juan" => array(4,7,8,9,2), "Mario" => array(4,9,2,5,7), "Lluis" => array(10,10,10,10,10));

function mostrarNotas($alumnos) {
    foreach($alumnos as $alumno => $notas){
        echo "Notas alumno " . $alumno . ", " . implode(", ", $notas) . "\n";
        echo "Su media es " . mostrarMediaAlumno($alumnos);
    }
}
mostrarNotas($alumnos);

    function mostrarMediaAlumno($notas) {
            $suma = array_sum($notas);
            $cuenta = count($notas);
            return $suma / $cuenta;
        
    }
?>