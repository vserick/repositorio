<?php

// nomes das variaveis

//para nomes compostos, primeiro nome tudo minusculo, a partir do segundo nome a primeira letra maiuscula
$nomeCompleto1 = "Erick Viana";
$anoNascimento = "2003";

//nunca inicie com numero
$nome1 = "claudio";
$nome2 = "claudete";

//use somente o under line de caracter especial, não usar nenhum outro
$_nome = "filipo";
$nome_completo = "filipo soares";
//====================================================================================================

// como apagar variaveis:

echo $nomeCompleto1;

echo "<br/>";

//o comando unset tira a variavel da memoria
unset($nomeCompleto1, $anoNascimento, $nome1, $nome2, $_nome, $nome_completo);

/*echo $nomeCompleto;
não exibira pois a variavel nomeCompleto foi excluido da memoria */
//======================================================================================================

// Concatenação ou junção de variaveis
$nome = "Julia";
$sobrenome = "Viana";

//Concatenação
$nomeCompleto = $nome . " " . $sobrenome;

echo $nomeCompleto;

?>