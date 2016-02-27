<?php
/**
 * Created by PhpStorm.
 * User: Raul
 * Date: 19/03/2015
 * Time: 01:27
 */

/**
 * Class <b>AssociacaoCliente:</b> Associação é duas classes ligadas por um atributo
 * onde podemos associar os atributos para ter acesso e manipulação entre elas

 */
class AssociacaoCliente {

    private $Cliente;
    private $Nome;
    private $Email;

    function __construct($Nome, $Email)
    {
        $this->Cliente = md5($Nome);
        $this->Nome = $Nome;
        $this->Email = $Email;
    }

    /**
     * @return mixed
     */
    public function getCliente()
    {
        return $this->Cliente;
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