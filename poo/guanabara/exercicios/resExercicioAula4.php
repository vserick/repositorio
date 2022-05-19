<?php 

require_once "exercicioAula4.php";

$mp1 = new MousePad(20, "Preto");
$mp1->setLed("Verde");

$mp1->ligar();

if ($mp1->getLigado(true)) {
    
    $modo = "Ligado";
    echo ucfirst(strtolower("O Meu Mouse Pad de {$mp1->getTamanho()}cm e cor {$mp1->getCor()} esta $modo na cor {$mp1->getLed()}"));

} else {

    $modo = "Desligado";
    echo ucfirst(strtolower("O meu mouse pad de {$mp1->getTamanho()}cm e cor {$mp1->getCor()} esta $modo."));

}

echo "<br>";

print_r($mp1);

?>