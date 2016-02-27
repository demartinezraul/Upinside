<?php
/**
 * Created by PhpStorm.
 * User: Raul
 * Date: 18/03/2015
 * Time: 02:55
 */

class AcessoPrivado {
    /** <b>PRIVATE:</b> tem responsabilidade total sobre os atributo, nao consegue visualizar ou manipular qualquer atributo
     *  de fora da classe somente de dentro dela nem um objeto nem herança e nada a não ser a propria classe,
     *  responsabilidade total maior segurança sempre cria um metódo para manipular de forma correta
     *  para aqueles atributo e para aqueles submetodos e sempre criar metódo para manipular outro metódo
     */

    private $Nome;
    private $Email;
    private $CPF;

    function __construct($Nome, $Email, $CPF)
    {
        $this->setNome($Nome);
        $this->setEmail($Email);
        $this->setCpf($CPF);
    }

    public function setNome($Nome){
        if($Nome && is_string($Nome)):
            $this->Nome = $Nome;
        else:
            die('Erro no nome!');
        endif;
    }

    public function setEmail($Email){
        if(filter_var($Email, FILTER_VALIDATE_EMAIL)):
            $this->Email = $Email;
        else:
            die('Email no e-mail');
        endif;
    }

    public function setCpf($Cpf){
        if(preg_match('/[0-9]*/i', $Cpf) && strlen($Cpf) == 11):
            $this->CPF = $Cpf;
        else:
            die('Erro no CPF!');
        endif;
    }


}