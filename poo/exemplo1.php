<?php 

class Pessoa {

    public $nome; // atributo

    public function falar() { // metodo

        return "Ola meu nome é " . $this->nome;

    }

}

$erick = new Pessoa();
$erick->nome = "Erick Viana";
echo $erick->falar();

?>