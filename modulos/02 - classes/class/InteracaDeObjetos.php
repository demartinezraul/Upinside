<?php
/**
 * Created by PhpStorm.
 * User: Raul
 * Date: 12/03/15
 * Time: 01:47
 */

class InteracaDeObjetos {
    public $Empresa;
    public $Setores;

    /** @var InteracaoClasse */
    public $Funcionario;

    function __construct($Empresa)
    {
        $this->Empresa = $Empresa;
        $this->Setores = 0;
    }

    public function Contratar($Funcionario, $Cargo, $Salario){
        $this->Funcionario = (object) $Funcionario;
        $this->Funcionario->Trabalhar($this->Empresa, $Salario, $Cargo);
        $this->Setores += 1;
    }

    public function Pagar(){
        $this->Funcionario->Recer($this->Funcionario->Salario);

    }
    public function Promover($Cargo, $Salario = null){
        $this->Funcionario->Profissao = $Cargo;
        if($Salario):
            $this->Funcionario->Salario = $Salario;
        endif;

    }
    public function Funcionarios($Funcionario){
        $this->Funcionario = (object) $Funcionario;
    }

    public function Demitir($Recisao){
        $this->Funcionario->Recer($Recisao);
        $this->Funcionario->Empresa = null;
        $this->Funcionario->Salario = null;
        $this->Setores -= 1;

    }


} 