<?php
/**
 * Created by PhpStorm.
 * User: Raul
 * Date: 11/03/15
 * Time: 02:03
 */

class InteracaoClasse {

    public $Nome;
    public $Idade;
    public $Profissao;
    public $Empresa;
    public $Salario;
    public $Conta;

    function __construct($Nome, $Idade, $Profissao, $Conta)
    {
        $this->Nome = $Nome;
        $this->Idade = $Idade;
        $this->Profissao = $Profissao;
        $this->Conta = $Conta;
    }

    public function Trabalhar($Empresa, $Salario, $Profissao){
        $this->Empresa = $Empresa;
        $this->Salario = $Salario;
        $this->Profissao = $Profissao;
    }

    public function recer($Valor){
        $this->Conta += $Valor;
    }


} 