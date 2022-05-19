<?php 

class MousePad {

    public $cor;
    public $led;
    public $tamanho;
    public $ligado;

    public function ligar() {

        if ($this->ligado == false) {

            echo "<p>Apertando Botão de Ligar...</p>";
            $this->ligado = true;
            echo "<p>Led Ligado</p>";

        } else {

            echo "<p>O Led ja esta ligado</p>";

        }

    }

    public function desligar() {

        if ($this->ligado == true) {

            echo "<p>Apertando Botão para Desligar...</p>";
            $this->ligado = false;
            echo "<p>Led Desligado</p>";

        } else {

            echo "<p>O led ja esta desligado</p>";

        }

    }



}


?>