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
class Update extends  Conn {

    private $Tabela;
    private $Dados;
    private $Termos;
    private $Places;
    private $Result;

    /** @var PDOStatement */
    private $Update;

    /** @var PDO */
    private $Conn;


    public function ExeUpdate($Tabela, array $Dados, $Termos, $ParseString){
        $this->Tabela = (string) $Tabela;
        $this->Dados = $Dados;
        $this->Termos = $Termos;

        parse_str($ParseString, $this->Places);
        $this->getSyntax();
        $this->Execute();
    }

    public function getResult(){
        return $this->Result;
    }

    //Verificar quantos resultado a query obteve
    public function getRowCount(){
        return $this->Update->rowCount();
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
        $this->Update = $this->Conn->prepare($this->Update);

    }
    //Cria a sintaxe de query para Prepared Statements
    private function getSyntax(){
        foreach($this->Dados as $Key => $Value):
            $Places[] = $Key . ' = :' . $Key;
        endforeach;

        $Places = implode(', ', $Places);
        $this->Update = "UPDATE {$this->Tabela} SET {$Places} {$this->Termos}";

    }

    //Obtém a Conexão e a Syntax, executa a query!
    private function Execute(){
        $this->Connect();
        try{
            $this->Update->execute(array_merge($this->Dados, $this->Places)); // mesclando os array
            $this->Result = true;
        } catch (PDOException $e){
            $this->Result = null;
            WSErro("<b>Erro ao Ler:</b> {$e->getMessage()}", $e->getCode());
        }


    }

}