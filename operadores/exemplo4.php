<?php 

// === OPERADORES DE COMPARAÇÃO === //

$a = 55.0;

$b = 55;

var_dump($a > $b); // -> ">" compara se $a é MAIOR que $b (verdadeiro ou falso)

echo "<br>";

var_dump($a < $b); // -> "<" compara se $a é MENOR que $b (verdadeiro ou falso)

echo "<br>";

var_dump($a == $b); // -> "==" compara se $a é IGUAL a $b (verdadeiro ou falso) ps: cuidado para não colocar apenas um igual

echo "<br>";

var_dump($a === $b); // -> "===" compara se $a é IGUAL a $b tanto no valor quanto no tipo de valor(ex: 55 é diferente de 55.0 mas tem valores iguais)

// Dois iguais = igualdade de valor.  Três iguais = igualdade de identidade

echo "<br>";

var_dump($a != $b); // -> "!=" compara de $a é DIFERENTE de $b (verdadeiro ou falso)

echo "<br>";

var_dump($a !== $b); //  "!==" compara se $a é DIFERENTE a $b tanto no valor quanto no tipo de valor(ex: 55 é diferente de 55.0 mas tem valores iguais)


?>