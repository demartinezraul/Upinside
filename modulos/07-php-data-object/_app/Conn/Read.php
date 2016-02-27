<?php

/**
 * <b>Class Read</b>
 * Classe responsável por leituras genéticas no banco de dados!
 */
class Read extends Conn {

    private $Select;
    private $Places;
    private $Result;

    /** @var PDOStatement */
    private $Read;

    /** @var PDO */
    private $Conn;


    public function ExeRead($Tabela, $Termos = null, $ParseString = null){
        if(!empty($ParseString)):
            parse_str($ParseString, $this->Places);
        endif;

        $this->Select = "SELECT * FROM {$Tabela} {$Termos}";
        $this->Execute();
    }

    public function getResult(){
        return $this->Result;
    }

    //Verificar quantos resultado a query obteve
    public function getRowCount(){
        return $this->Read->rowCount();
    }

    //Executando a query manualmente
    public function  FullRead($Query, $ParseString = null){
        $this->Select = (string) $Query;

        if(!empty($ParseString)):
            parse_str($ParseString, $this->Places);
        endif;
        $this->Execute();
    }

    //Manipulando apenas a parte da string ex: name=VALOR&views=10&limit=VALOR;
    public function setPlaces($ParseString){
        parse_str($ParseString, $this->Places);
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
        $this->Read = $this->Conn->prepare($this->Select);
        $this->Read->setFetchMode(PDO::FETCH_ASSOC);

    }
    //Cria a sintaxe de query para Prepared Statements
    private function getSyntax(){
        if($this->Places):
            foreach($this->Places as $Vinculo => $Valor):
                if($Vinculo == 'limit' || $Vinculo == 'offset'):
                    $Valor = (int) $Valor;
                endif;
                $this->Read->bindValue(":{$Vinculo}",$Valor, ( is_int($Valor) ? PDO::PARAM_INT : PDO::PARAM_STR));
            endforeach;
        endif;
     }

    //Obtém a Conexão e a Syntax, executa a query!
    private function Execute(){
        $this->Connect();
        try{
            $this->getSyntax();
            $this->Read->execute();
            $this->Result = $this->Read->fetchAll();
        } catch (PDOException $e){
            $this->Result = null;
            WSErro("<b>Erro ao Ler:</b> {$e->getMessage()}", $e->getCode());
        }

    }

}