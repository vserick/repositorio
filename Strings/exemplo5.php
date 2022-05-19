<?php 

$tx = "Ola meu nome e Erick, prazer";

echo $tx;

echo "<br>";

$palavra = "meu";

$palavra2 = "Erick";

var_dump($palavra2);

echo "<br>";

$subPalavra = strpos($tx, $palavra);

$subPalavra2 = strpos($tx, $palavra2); 

var_dump($subPalavra2);

echo "<br>";

$texto = substr($tx, $subPalavra, $subPalavra2);

echo $texto;

?>