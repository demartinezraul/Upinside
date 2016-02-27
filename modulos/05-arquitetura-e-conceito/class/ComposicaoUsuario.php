<?php
/**
 * Created by PhpStorm.
 * User: Raul
 * Date: 19/03/2015
 * Time: 02:26
 */

class ComposicaoUsuario {

    private $Nome;
    private $Email;
    private $Endereco;

    function __construct($Nome, $Email)
    {
        $this->setNome($Nome);
        $this->Email = $Email;
    }

    public function CadastrarEndereco($Cidade, $Estado){
        $this->Endereco = new ComposicaoEndereco($Cidade, $Estado);
    }

    /**
     * @return ComposicaoEndereco
     */
    public function getEndereco(){
        return $this->Endereco;
    }

    public function setNome($Nome){
        if($Nome && is_string($Nome)):
            $this->Nome = $Nome;
        else:
            die("ERRO: Informe um nome valido!");
        endif;
    }

    /**
     * @return mixed
     */
    public function getNome()
    {
        return $this->Nome;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->Email;
    }




}