<?php
/*- Exercici 1
Crea una classe Employee, defineix com a atributs el seu nom i sou. Definir un mètode initialize que rebi 
com a paràmetres el nom i sou. Plantejar un segon mètode print que imprimeixi el nom i un missatge si ha de pagar 
o no impostos (si el sou supera 6000, paga impostos).*/
 class Employee {
    public $nombre;
    public $sueldo;

    //definir metodo que inicialice que reciba como parametro el nombre y el sueldo.
    public function initialize($nombre, $sueldo) {
        $this->nombre = $nombre;
        $this->sueldo = $sueldo;
    }

    // definir otro metodo que imprima el nombre y si tienes que pagar impuestos.
    public function impuestos() {
        echo $this->nombre . "\n";
        if ($this->sueldo > 6000) {
            echo "Pagas impuestos por cobrar más de 6.000€.";
        } else {
            echo "No tiene que pagar impuestos.";
        }
    }
 }
?>