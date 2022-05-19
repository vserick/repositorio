<?php 

Class ContaBanco {

    public $numConta;
    protected $tipo;
    private $dono;
    private $saldo;
    private $status;

    public function __construct() {

        $this->setSaldo(0);
        $this->setStatus(false);
        echo "<p>Conta Criada com Sucesso!!!</p>";

    }

    public function abrirConta($t) {

        $this->setTipo($t);
        $this->setStatus(true);

        if ($t == "cc") {

            $this->setSaldo(50);

        } else if ($t == "cp") {

            $this->setSaldo(150);

        }

    }

    public function fecharConta() {

        if ($this->getSaldo() > 0) {

            echo "<p>Conta com Dinheiro. Impossivel fechar!!!</p>";

        } else if ($this->getSaldo() < 0) {

            echo "<p>Conta em Débito. Impossivel encerrar</p>";

        } else {

            echo "<p>A conta de numero {$this->getNumConta()} do Srº(ª) {$this->getDono()} esta sendo Encerrada.</p>";
            $this->setStatus(false);
            $this->setNumConta(0);
            $this->setDono(" ");
            $this->setTipo("");

        }

    }

    public function depositar($d) {

        if ($this->getStatus()) {

            $this->setSaldo($this->getSaldo() + $d);
            echo "<p>Deposito de $ $d na conta de {$this->getDono()}</p>";

        } else {

            echo "<p>Você Precisa Abrir uma Conta para Depositar</p>";

        }

    }

    public function sacar($s) {

        if ($this->getStatus()) {

            if ($this->getSaldo() >= $s ) {

                $this->setSaldo($this->getSaldo() - $s);
                echo "<p>Saque de R$ $s Autorizado na conta de {$this->getDono()}</p>";

            } else {

                echo "<p>Saldo Insuficiente</p>";

            }
        } else {

            echo "<p>Impossivel Sacar. Abra uma conta</p>";

        }

    }

    public function pagarMensal() {

        if ($this->getTipo() == "cc") {

            $mensal = 12;

        } else if ($this->getTipo() == "cp") {

            $mensal = 20;

        }
    
        if ($this->getStatus()) {

            if ($this->getSaldo() > $mensal) {

                $this->setSaldo($this->getSaldo() - $mensal);
                echo "<p>Mensalidade de R$ $mensal Debitado da conta de {$this->getDono()}</p>";

            } else {

                echo "<p>Saldo Insuficiente para pagar Mensalidade</p>";

            }

        } else {

            echo "<p>Abra uma conta</p>";

        }

    }

    public function getNumConta() {

        return $this->numConta;

    }

    public function setNumConta($nc) {

        $this->numConta = $nc;

    }

    public function getTipo() {

        return $this->tipo;

    }

    public function setTipo($t) {

        $this->tipo = $t;

    }

    public function getDono() {

        return $this->dono;

    }

    public function setDono($d) {

        $this->dono = $d;

    }

    public function getSaldo() {

        return $this->saldo;

    }

    public function setSaldo($s) {

        $this->saldo = $s;

    }

    public function getStatus() {

        return $this->status;

    }

    public function setStatus($st) {

        $this->status = $st;

    }

}

?>