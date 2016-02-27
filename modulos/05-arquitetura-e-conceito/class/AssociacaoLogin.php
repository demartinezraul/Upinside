<?php
/**
 * Created by PhpStorm.
 * User: Raul
 * Date: 19/03/2015
 * Time: 01:28
 */

class AssociacaoLogin {
    /**
     * @var AssociacaoCliente
     */
    private $Cliente;
    private $Login;

    function __construct($Cliente)
    {
        if(is_object($Cliente)):

        $this->Cliente = $Cliente;
        $this->Login = true;

        else:
            die('Erro ao logar:');
        endif;
    }

    /**
     * @return AssociacaoCliente
     */
    public function getCliente()
    {
        return $this->Cliente;
    }

    /**
     * @return mixed
     */
    public function getLogin()
    {
        return $this->Login;
    }




}