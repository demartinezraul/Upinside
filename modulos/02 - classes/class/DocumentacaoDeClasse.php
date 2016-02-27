<?php
/**
 * Created by PhpStorm.
 * User: Raul
 * Date: 12/03/15
 * Time: 01:47
 */

/**
 * DocumentacaoDeClasse
 * Essa classe foi criada para mostrar a interação de objetos. Logo depois
 * replicamos ela para ver sobre a documentação de classes com PHPdoc.
 */
class DocumentacaoDeClasse {

    /** @var  string Nome da empresa */
    public $Empresa;

    /**
     * Esse Atributo é auto gerida pela classe e incrementa o numero de funcionario;
     * @var int número de funcionarios
     */
    public $Setores;

    /** @var InteracaoClasse Objeto vindo da classe interacaoClasse*/
    public $Funcionario;

    //Constroi a classe requisitando o nome da empresa
    function __construct($Empresa)
    {
        $this->Empresa = $Empresa;
        $this->Setores = 0;
    }

    /**
     * <b>Contratar Funcionário: </b> Informe um objeto da classe InteracaoClasse, o cargo e o salário do funcionario a ser contratado
     * @param Object $Funcionario = Objeto da classe InteracaoClasse
     * @param String $Cargo = Profissao ou cargo a ocupar
     * @param float $Salario = Salário do funcionário
     */
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