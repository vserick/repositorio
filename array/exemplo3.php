<?php 

// FUNÇÕES PARA TRATAR ARRAYS

$pessoas = array();

// array push adiciona um elemento na ultima posição do array
array_push($pessoas, array(
    'nome' => 'Erick',
    'idade' => '18'
));

array_push($pessoas, array(
    'nome' => 'Julia',
    'idade' => '16'
));

array_push($pessoas, array(
    'nome' => 'João',
    'idade' => '15'
));

print_r($pessoas);
//echo $pessoas[1]['nome']; // Julia

// array unshift adiciona um elemento na primeira posição do array
array_unshift($pessoas, array(
    'nome' => 'Claudio',
    'idade' => '23'
));

print_r($pessoas);

// array shift elimina o primeiro elemento do array
array_shift($pessoas);

print_r($pessoas);


?>