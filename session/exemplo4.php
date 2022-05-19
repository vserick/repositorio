<?php 

session_id('7jl89aq4jvun7jgpvpsenohlfm');

require_once("config.php");

// essa função faz com que o servidor gere um novo id cada vez que a pagina é recarregada
session_regenerate_id();

echo session_id();

var_dump($_SESSION);

?>