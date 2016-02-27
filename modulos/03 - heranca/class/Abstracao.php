<?php
/**
 * Created by PhpStorm.
 * User: Raul
 * Date: 15/03/2015
 * Time: 01:51
 */

/*
 * <b>Classe Abstract:</b> Não é uma classe concreta é uma classe abstrata
 * nesse momento não pode ser instanciada ela vai servir somente de herança
 * ela vai ser herdada de outras classes (MAIS NUNCA POR UM OBJETO)
 */
abstract class Abstracao {
    public $Cliente;
    public $Conta;
    public $Saldo;

    function __construct($Cliente, $Saldo){
        $this->Cliente = $Cliente;
        $this->Saldo = $Saldo;
    }

    public function Depositar($Valor){
        $this->Saldo += (float) $Valor;
        echo "<span style='color:green'><b>{$this->Conta}</b> Depósito de {$this->Real($Valor)} efetuado com sucesso </span><br>";

    }

    public function Sacar($Valor){
        $this->Saldo -= (float) $Valor;
        echo "<span style='color:red'><b>{$this->Conta}</b> Saque de {$this->Real($Valor)} efetuado com sucesso </span><br>";

    }

    /**
     * @param Abstração $Destino
     */
    public function Transferir($Valor, $Destino){
        if($this === $Destino):
            echo "Você não pode transferir valores para mesma conta:<br>";
        else:
            echo "<hr>";
            $this->Sacar($Valor);
            $Destino->Depositar($Valor);
            echo "<span style='color:blue'><b>{$this->Conta}</b> Transferência de {$this->Real($Valor)} efetuado com sucesso de {$this->Cliente} para {$Destino->Cliente} </span><br>";
            echo "<hr>";
        endif;
    }

    public function Extrato(){
        echo "<hr><hr> Olá {$this->Cliente}. Seu saldo em {$this->Conta} é de {$this->Real($this->Saldo)} <hr>";
    }

    public function Real($Valor){
        return "R$ " . number_format($Valor, '2','.',',');
    }

    abstract public function VerSaldo();


}