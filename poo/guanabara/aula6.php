<?php 

require_once "aula6interface.php";

class ControleRemoto implements Controlador {

    //atributos
    private $volume;
    private $ligado;
    private $tocando;

    //metodos especiais
    public function __construct() {

        $this->setLigado(false);
        $this->setVolume(50);
        $this->setTocando(false);

    }

    private function getVolume() {

        return $this->volume;

    }

    private function getLigado() {

        return $this->ligado;

    }

    private function getTocando() {

        return $this->tocando;

    }

    private function setVolume($v) {

        $this->volume = $v;

    }

    private function setLigado($l) {

        $this->ligado = $l;

    }

    private function setTocando($t) {

        $this->tocando = $t;

    }

    public function ligar() {

        $this->setLigado(true);

    }

    public function desligar() {

        $this->setLigado(false);

    }

    public function abrirMenu() {

        echo "<br> -------- MENU --------";
        echo "<br>Esta Ligado?: " . ($this->getLigado()?"SIM":"NÃO");
        echo "<br>Esta Tocando?: " . ($this->getTocando()?"SIM":"NÃO");
        echo "<br>Volume: " . $this->getVolume();
        
        for ($i=1; $i <= $this->getVolume() ; $i+= 10) { 
           
            echo "| ";

        }

        echo "<br>";

    }

    public function fecharMenu() {

        echo "<br>Fechando Menu...</br>";

    }

    public function maisVolume() {

        if ($this->getLigado()) {

            $this->setVolume($this->getVolume() + 10);

        }

    }

    public function menosVolume() {

        if ($this->getLigado()) {

            $this->setVolume($this->getVolume() - 10);

        }

    }

    public function ativarMudo() {

        if ($this->getLigado() && $this->getVolume() > 0) {

            $this->setVolume(0);

        }

    }

    public function desativarMudo() {

        if ($this->getLigado() && $this->getVolume() == 0) {

            $this->setVolume(50);

        }

    }

    public function play() {

        if ($this->getLigado() && !$this->getTocando()) {

            $this->setTocando(true);

        }

    }

    public function pause() {

        if ($this->getLigado() && $this->getTocando()) {

            $this->setTocando(false);

        }

    }



}

?>