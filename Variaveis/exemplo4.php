<?php 

// VARIAVEIS PRÉ DEFINIDAS - ARREY SUPER GLOBAIS

$nome = (int)$_GET["a"]; // -> "(int)" converte a variavel para inteiro / $GET["a"] tem todas as variaveis que recebemos atraves da URL

//var_dump($nome);

$ip = $_SERVER["REMOTE_ADDR"]; // -> $_SERVER["REMOTE_ADDR"] Mostra o ip do usuario

//echo $ip

$ip = $_SERVER["SCRIPT_NAME"]; // -> $_SERVER["SCRIPT_NAME"] Mostra a URL 

//echo $ip

?>