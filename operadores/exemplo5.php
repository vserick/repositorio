<?php 

// ==== SPACE SHIP ==== //

$a = 30;

$b = 30;

var_dump($a <=> $b); // caso $a for maior que $b retorna 1
                     // caso $b for maior que $a retorna -1
                     // caso $a e $b forem iguais retorna 0  

 // ==== NULL COALESCING ==== //
 
 $c = NULL;

 $d = NULL;

 $e = 10;

 echo $c ?? $d ?? $e; // "??" indica que estou pedindo para mostrar a primeira variavel, caso ela seja nula
                      // mostrar a segunda, caso tambem seja, mostrar a proxima e assim por diante.  


?>