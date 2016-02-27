<?php
/**
 * Created by PhpStorm.
 * User: Raul
 * Date: 18/03/2015
 * Time: 02:22
 */

class AcessoPublico {

    public $Nome;
    public $Email;

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

}