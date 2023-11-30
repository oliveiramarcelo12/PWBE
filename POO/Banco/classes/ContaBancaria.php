<!-- classes/ContaBancaria.php -->
<?php

class ContaBancaria {
    private $nome;
    private $numeroConta;
    private $saldo;

    public function __construct($nome,$numeroConta) {
        $this->saldo = 100.00; // Saldo inicial de R$100,00
        $this->nome = $nome;
        $this->numeroConta = $numeroConta;
    }

    public function abrirConta($nome, $numeroConta) {
        $this->nome = $nome;
        $this->numeroConta = $numeroConta;
        return "Conta aberta com sucesso para $nome. Número da conta: $numeroConta";
    }
    

    public function consultarSaldo() {
        return "Saldo atual: R$" . number_format($this->saldo, 2);
    }

    public function sacar($valor) {
        if ($valor > 0 && $valor <= $this->saldo) {
            $this->saldo -= $valor;
            return "Saque de R$" . number_format($valor, 2) . " realizado com sucesso";
        } else {
            return "Saldo insuficiente para saque";
        }
    }

    public function depositar($valor) {
        if ($valor > 0) {
            $this->saldo += $valor;
            return "Depósito de R$" . number_format($valor, 2) . " realizado com sucesso";
        } else {
            return "Valor de depósito inválido";
        }
    }

    public function consultarDadosCliente() {
        return "Nome: $this->nome\nNúmero da conta: $this->numeroConta\n" . $this->consultarSaldo();
    }
}

?>