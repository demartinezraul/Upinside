<?php
/**
 * Created by PhpStorm.
 * User: Raul
 * Date: 13/03/2015
 * Time: 02:00
 */

class HerancaJuridica extends Heranca{
    public $Empresa;
    public $Funcionarios;


    /**
     * @param $Nome = Herdado da classe pai Herança
     * @param $Idade = Herdado da classe pai Herança
     * @param $Empresa = Herdado da classe pai Herança
     * @parent:: = palavra reservada para executar tudo oque tem dentro do construtor da classe pai HERANÇA
     */
    function __construct($Nome, $Idade, $Empresa){
        parent::__construct($Nome, $Idade);
        $this->Empresa = $Empresa;
    }

    public function Contratar($Pessoa){
        echo "A empresa {$this->Empresa} de {$this->Nome} contratou {$Pessoa}<hr>";
        $this->Funcionarios += 1;
    }

    public function VerEmpresa(){
        echo "{$this->Empresa} foi fundada por {$this->Nome} e tem {$this->Funcionarios} funcionarios<br><small style='color:#09f;'>";
        parent::VerPessoa();
        echo "</small>";

    }

}