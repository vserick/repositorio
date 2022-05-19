<?php 

// ESCOPOS    

$nome = "Erick";

function teste() {

// global indica que a variavel vai ser utilizada dentro e fora da function    
    global $nome;
    echo $nome; 
    
}

function teste2() {

// nesse caso a variavel nome só funciona dentro da function pois não foi atribuido o global    
    $nome = "Julia" ;   
    echo $nome . " agora no teste 2";

}

teste();

teste2();

?>