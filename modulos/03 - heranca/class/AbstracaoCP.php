<?php
/**
 * Created by PhpStorm.
 * User: Raul
 * Date: 15/03/2015
 * Time: 23:07
 */

class AbstracaoCP extends AbstracaoCC{
    public $Rendimento;

    function __construct($Cliente, $Saldo){
        parent::__construct($Cliente, $Saldo, 0);
        $this->Conta = 'Conta Poupança';
        $this->Rendimento = 1.7;
    }

    public function VerSaldo(){
        parent::Extrato();
    }

    final public function Depositar($Valor){
        $Juro = $Valor * ($this->Rendimento / 100);
        $Deposito = $Valor + $Juro;
        parent::Depositar($Deposito);
        echo "<small style='color:#09f'>Valor do depósito: {$this->Real($Valor)} || Rendimento: {$this->Real($Juro)}</small><hr>";

    }
}