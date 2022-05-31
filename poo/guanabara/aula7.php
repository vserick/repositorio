<?php 

class Lutador {

    //atributos
    private $nome;
    private $nacionalidade;
    private $idade;
    private $altura;
    private $peso;
    private $categoria;
    private $vitorias;
    private $empates;
    private $derrotas;

    //metodos
    public function apresentar() {

        echo "<p>--------------------------------</P>";
        echo "<p>Com vocês  " . $this->getNome();
        echo "<br>Do(a) " . $this->getNacionalidade();
        echo "<br>De " . $this->getIdade() . " anos";
        echo "<br>Com " . $this->getPeso() . "kg";
        echo "<br>E com " . $this->getAltura() . "mt</p>";
        echo "<p>Vitorias: " . $this->getVitorias();
        echo "<br>Derrotas: " . $this->getDerrotas();
        echo "<br>Empates: " . $this->getEmpates() . "</p>";
    
    }

    public function status() {

        echo "<p>------------------------------</p>";
        echo $this->getNome() . ", categoria: Peso " . $this->getCategoria();
        echo "<br>|W: " . $this->getVitorias() . " |";
        echo "<br>|L: " . $this->getDerrotas() . " |";
        echo "<br>|E: " . $this->getEmpates() . "  |";

    }

    public function ganhar() {

        $this->setVitorias($this->getVitorias() + 1);

    }

    public function perder() {

        $this->setDerrotas($this->getDerrotas() + 1);

    }

    public function empatar() {

        $this->setEmpates($this->getEmpates() + 1);

    }

    //metodos especiais
    public function __construct($no, $na, $id, $al, $pe, $vi, $de, $em) {

        $this->nome = $no;
        $this->nacionalidade = $na;
        $this->idade = $id;
        $this->altura = $al;
        $this->setPeso($pe);
        $this->vitorias = $vi;
        $this->empates = $em;
        $this->derrotas = $de;

    }

    public function getNome() {

        return $this->nome;

    }

    public function setNome($no) {

        $this->nome = $no;

    }
    
    public function getNacionalidade() {

        return $this->nacionalidade;

    }

    public function setNacionalidade($na) {

        $this->nacionalidade = $na;

    }

    public function getAltura() {

        return $this->altura;

    }

    public function setAltura($al) {

        $this->altura = $al;

    }

    public function getPeso() {

        return $this->peso;

    }

    public function setPeso($pe) {

        $this->peso = $pe;
        $this->setCategoria();

    }

    public function getCategoria() {

        return $this->categoria;

    }

    private function setCategoria() {

        if ($this->peso < 52.2) {

            $this->categoria = "Invalido";

        } else if ($this->peso <= 70.3) {

            $this->categoria = "Leve";

        } else if ($this->peso <= 83.9) {

            $this->categoria = "Medio";

        } else if ($this->peso <= 120.2) {

            $this->categoria = "Pesado";

        } else {

            $this->categoria = "Invalido";

        }

    }

    public function getVitorias() {

        return $this->vitorias;

    }

    public function setVitorias($vi) {

        $this->vitorias = $vi;

    }

    public function getDerrotas() {

        return $this->derrotas;

    }

    public function setDerrotas($de) {

        $this->derrotas = $de;

    }

    public function getEmpates() {

        return $this->empates;

    }

    public function setEmpates($em) {

        $this->empates = $em;

    }

    public function getIdade() {

        return $this->idade;

    }

    public function setIdade($id) {

        $this->idade = $id;

    }

}

?>