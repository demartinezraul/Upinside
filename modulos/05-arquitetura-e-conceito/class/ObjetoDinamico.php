<?php
/**
 * Created by PhpStorm.
 * User: Raul
 * Date: 19/03/2015
 * Time: 01:05
 */

class ObjetoDinamico {

    public $Nome;
    public $Email;

    public function Novo($Cliente){
        if(is_object($Cliente)):
            $this->Nome = $Cliente->Nome;
            $this->Email = $Cliente->Email;
        else:
            die('Erro, informe o objeto com nome e email');
        endif;
    }

}