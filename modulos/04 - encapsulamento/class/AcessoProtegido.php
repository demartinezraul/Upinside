<?php
/**
 * Created by PhpStorm.
 * User: Raul
 * Date: 18/03/2015
 * Time: 02:37
 */

class AcessoProtegido {
    public $Nome;
    /**
     * @var <b>PROTECTED:</b> Ele tras maior responsabilidade ao atributos metodos
     * tem a segurando melhorada e o compartilhamento desses atributos metodos (propriedade protegida)
     * se dão apenas com as classes filhas e nao com o objeto
     * protected nao pode mais utilizar no objeto (SEGURANÇA)
     */
    protected $Email;

    function __construct($Nome, $Email)
    {
        $this->Nome = $Nome;
        $this->setEmail($Email);
    }

    public function setEmail($Email)
    {
        if (!filter_var($Email, FILTER_VALIDATE_EMAIL)):
            die('Email invalido:');
        else:
            $this->Email = $Email;
        endif;
    }

    final protected function setNome($Nome){
        $this->Nome = $Nome;
    }

}

class AcessoProtegidoFilha extends AcessoProtegido{
    protected $CPF;

    public function addCpf($Nome, $Cpf){
        parent::setNome($Nome);
        $this->CPF = $Cpf;
    }
}