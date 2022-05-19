<?php 

// === FUNÇÕES NATIVAS DO PHP PARA STRINGS === //

$nome = "Erick Viana";

$nome = strtoupper($nome); // -> "strtoupper" deixa a função dentro toda MAIUSCULA

echo $nome;

echo "<br>";

$nome = strtolower($nome); // -> "strtolower" deixa a função dentro toda MINUSCULA

echo $nome;

echo "<br>";

$nome = ucfirst($nome); // -> "ucfirst" deixa a primeira letra da primeira palavra dentro da função MAIUSCULA

echo $nome;

echo "<br>";

$nome =  ucwords($nome); // -> "ucwords" deixa a primeira letra de todas as palavras dentro da função MAIUSCULAS

echo $nome;

?> 