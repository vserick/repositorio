<?php 

// Explode cria um Array de cada palavra separada por espaço

$tx = "Erick Viana Silva";
$r = explode(" ", $tx);
print_r($r);

$vetor[0] = "Erick";
$vetor[1] = "Viana";
$vetor[2] = "Silva";

echo "<br>";

// Implode pega os valores do Array e junta no texto

$texto = implode(" ", $vetor);
echo $texto;

?>