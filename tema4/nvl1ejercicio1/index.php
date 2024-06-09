<?php
/*- Exercici 1
Crea una classe Employee, defineix com a atributs el seu nom i sou. Definir un mètode initialize que rebi 
com a paràmetres el nom i sou. Plantejar un segon mètode print que imprimeixi el nom i un missatge si ha de pagar 
o no impostos (si el sou supera 6000, paga impostos).*/
require_once "Employee.php";

 $empleado1 = new Employee;
 $empleado1->initialize("Cassio", 8000);
 $empleado1->impuestos();
?>