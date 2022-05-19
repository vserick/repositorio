<?php 

$tx = "Olá meu nome agora";


//$r = str_word_count($tx, 0); // a função str_word_count usando o segundo parametro 0 mostrara a quantida de palavras
//echo $r;

//echo "<br>";

//$r = str_word_count($tx, 1); // a função str_word_count usando o segundo parametro 1 criara um Array e colocara as palavras nele
//print_r($r);

//echo "<br>";

$r = str_word_count($tx, 2); // a função str_word_count usando o segundo parametro 2 criara um Array e colocara as palavras nele, tendo
                             // como posição a posição inicial da palavra na frase       
print_r($r);
?>