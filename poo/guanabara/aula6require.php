<h1>Projeto Controle Remoto</h1>

<?php 

require_once "aula6.php";

$c = new ControleRemoto;
$c->ligar();
$c->maisVolume();
$c->abrirMenu();
$c->fecharMenu();
$c->play();
$c->abrirMenu();
$c->pause();
$c->menosVolume();
$c->menosVolume();
$c->menosVolume();
$c->menosVolume();
$c->abrirMenu();


print_r($c);

?>