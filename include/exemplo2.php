<?php 

include "inc/exemplo1.php";
require_once "inc/exemplo1.php"; 
require_once "inc/exemplo1.php"; 

$resultado = somar(10, 5);

echo $resultado;

/* DIFERENÇA ENTRE INCLUDE E REQUIRE :

REQUIRE -> Exige que o arquivo exista e esteja funcionando
INCLUDE -> Não faz essa exigencia e usa o include_path
para procurar por arquivos que não encontrar */

?>