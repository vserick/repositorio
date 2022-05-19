<?php 

// a funcão substr_count exibi quantas vezes determinada string aparece

$tx = "Ola meu nome é Erick mas pode me chamar de Erick";
$res = substr_count($tx, "Erick");
echo "O nome Erick aparece $res vezes";

?>