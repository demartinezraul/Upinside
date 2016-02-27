<?php
/**
 * Created by PhpStorm.
 * User: Raul
 * Date: 27/03/2015
 * Time: 00:52
 */

/**
 * <b>Class Update</b>
 * Classe responsável por atualizações genéticas no banco de dados!
 */
class Delete extends  Conn {

    private $Tabela;
    private $Termos;
    private $Places;
    private $Result;

    /** @var PDOStatement */
    private $Delete;

    /** @var PDO */
    private $Conn;


    public function ExeDelete($Tabela, $Termos, $ParseString){
        $this->Tabela = (string) $Tabela;
        $this->Termos = (string) $Termos;

        parse_str($ParseString, $this->Places);
        $this->getSyntax();
        $this->Execute();
    }

    public function getResult(){
        return $this->Result;
    }

    //Verificar quantos resultado a query obteve
    public function getRowCount(){
        return $this->Delete->rowCount();
    }

    //Manipulando apenas a parte da string ex: name=VALOR&views=10&limit=VALOR;
    public function setPlaces($ParseString){
        parse_str($ParseString, $this->Places);
        $this->getSyntax();
        $this->Execute();
    }

    /**
     * ****************************************
     * *********** PRIVATE METHODS  ***********
     * ****************************************
     */
    //Obtém o PDO e Prepara a query
    private function Connect(){
        $this->Conn = parent::getConn();
        $this->Delete = $this->Conn->prepare($this->Delete);
    }
    //Cria a sintaxe de query para Prepared Statements
    private function getSyntax(){
        $this->Delete = "DELETE FROM {$this->Tabela} {$this->Termos}";

    }

    //Obtém a Conexão e a Syntax, executa a query!
    private function Execute(){
        $this->Connect();
        try{
            $this->Delete->execute($this->Places);
            $this->Result = true;
        } catch (PDOException $e){
            $this->Result = null;
            WSErro("<b>Erro ao Ler:</b> {$e->getMessage()}", $e->getCode());
        }

    }

}