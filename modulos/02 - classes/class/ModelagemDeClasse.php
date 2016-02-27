<?php
/**
 * Created by PhpStorm.
 * User: Raul
 * Date: 11/03/15
 * Time: 02:03
 */

class ModelagemDeClasse {

    public $Nome;
    public $Idade;
    public $Profissao;
    public $ContaSalario;

    function __construct($Nome, $Idade, $Profissao, $ContaSalario)
    {
        $this->Nome = $Nome;
        $this->Idade = $Idade;
        $this->Profissao = $Profissao;
        $this->ContaSalario = $ContaSalario;
    }

    public function Trabalhar($Trabalho, $Valor){
        $this->ContaSalario += $Valor;
        $this->DarEcho("{$this->Nome} desenvolveu um {$Trabalho} e recebeu {$this->Toreal($Valor)}");

    }

    /**
     * @param mixed $Nome
     */
    public function setNome($Nome)
    {
        $this->Nome = $Nome;
    }

    /**
     * @param mixed $Idade
     */
    public function setIdade($Idade)
    {
        $this->Idade = $Idade;
    }

    /**
     * @param mixed $Profissao
     */
    public function setProfissao($Profissao)
    {
        $this->Profissao = $Profissao;
    }

    /**
     * @param mixed $ContaSalario
     */
    public function setContaSalario($ContaSalario)
    {
        $this->ContaSalario = $ContaSalario;
    }

    public function ToReal($Valor){
        return number_format($Valor, '2','.',',');

    }

    public function DarEcho($Mensagem){
        echo "<p>{$Mensagem}</p>";
    }



} 