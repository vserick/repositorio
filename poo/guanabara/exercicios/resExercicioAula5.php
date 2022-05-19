<?php 

require_once "exercicioAula5.php";

$p1 = new ContaBanco(); //Jubileu
$p2 = new ContaBanco(); //Creuza
$p3 = new ContaBanco(); //Jerry

$p1->abrirConta("cc");
$p1->setDono("Jubileu");
$p1->setNumConta(1111);
$p1->depositar(300);
$p1->pagarMensal();
//$p1->sacar(1000);  --> Saldo insuficiente
//$p1->fecharConta(); --> Conta com Dinheiro. Impossivel fechar!!!

$p2->abrirConta("cp");
$p2->setDono("Creuza");
$p2->setNumConta(1112);
$p2->depositar(500);
$p2->sacar(100);
$p2->pagarMensal();
$p2->sacar(530);
$p2->fecharConta();

$p3->abrirConta("cc");
$p3->setDono("Jerry");
$p3->setNumConta(1113);
$p3->depositar(4000);
$p3->pagarMensal();


print_r($p1);

echo "<br>";

print_r($p2);

echo "<br>";

print_r($p3);

?>