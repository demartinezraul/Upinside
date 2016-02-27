<?php
/**
 * Created by PhpStorm.
 * User: Raul
 * Date: 15/03/2015
 * Time: 02:36
 */

class AbstracaoCC extends Abstracao{
    public $Limite;

    function __construct($Cliente, $Saldo, $Limite){
        parent::__construct($Cliente, $Saldo); // acessa atributo da classe PAI
        $this->Conta = 'Conta Corrente';
        $this->Limite = (float) $Limite;
    }

    final public function Sacar($Valor){
        if($this->Saldo + $this->Limite >= (float) $Valor):
            parent::Sacar($Valor);
        else:
            echo "<span style='color:red'><b>{$this->Conta}</b> Erro ao sacar {$this->Real($Valor)}, saldo indisponível </span><br>";
        endif;
        }

    /** @param Abstração $Destino */
    final public function Transferir($Valor, $Destino){
        if($this->Saldo + $this->Limite >= (float) $Valor):
            parent::Transferir($Valor, $Destino);
        else:
            echo "<span style='color:red'><b>{$this->Conta}</b> Erro ao transferir {$this->Real($Valor)}, saldo indisponível </span><br>";
        endif;
    }


    public function VerSaldo(){
        parent::Extrato();
    }

}