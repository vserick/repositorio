<?php 

function ola() {

    echo "<h1>Olá Mundo!!</h1>";

}

function mostrarValor($v) {

    echo "<h2>Acabei de receber o valor $v</h2>";

}

function parOuImpar($n) {

    if ($n % 2 == 0) {

        return "PAR";

    } else {

        return "IMPAR";
    }

}

?>