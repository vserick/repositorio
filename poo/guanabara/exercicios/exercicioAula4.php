<?php 

class MousePad {

    private $ligado;
    private $tamanho;
    private $cor;
    private $led;

    public function __construct($t, $c) {

        $this->tamanho = $t;
        $this->cor = $c;
        $this->desligar();

    }

    public function desligar() {

        if ($this->ligado == true) {

            $this->ligado = false;

        }

    }

    public function ligar() {

        if ($this->ligado == false) {

            $this->ligado = true;

        }

    }

    public function getLed() {

        return $this->led;

    }

    public function setLed($l) {

        $this->led = $l;

    }

    public function getTamanho() {

        return $this->tamanho;

    }

    public function setTamanho($t) {

        $this->tamanho = $t;

    }

    public function getLigado() {

        return $this->ligado;

    }

    public function setLigado($lig) {

        $this->ligado = $lig;

    }

    public function getCor() {

        return $this->cor;

    }

    public function setCor($c) {

        $this->cor = $c;

    }

}

?>