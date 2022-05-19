<?php 

$a = 10;

// o e-comercial faz com faz com que o parametro mude para referencia (Ou seja, o que acontece dentro da função 
// atinge tambem na variavel)

function trocaValor(&$b) {

    $b += 50;

    return $b;

}

echo trocaValor($a);

echo "<br>";

echo trocaValor($a);

echo "<br>";

echo $a;

?>