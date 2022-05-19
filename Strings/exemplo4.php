<?php 

$frase = "A repetição é mãe da retenção.";

$palavra = "mãe";

$lenPalavra = mb_strlen($palavra); // $lenPalavra = 3

echo $lenPalavra , "<br>";

$q = mb_strpos($frase, $palavra); // $q = 14

echo $q . "<br>";

$texto = mb_substr($frase, $q, $lenPalavra); 

var_dump($texto);

$texto2 = mb_substr($frase, $q + mb_strlen($palavra) + 1, mb_strlen($frase));  

echo "<br>";

var_dump($texto2);

// strlen -> tamanho
// substr -> corta um trecho (de, ate)
// strpos -> posição

?>