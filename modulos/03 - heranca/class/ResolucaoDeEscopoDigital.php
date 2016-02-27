<?php
/**
 * Created by PhpStorm.
 * User: Raul
 * Date: 16/03/2015
 * Time: 01:00
 */

class ResolucaoDeEscopoDigital extends ResolucaoDeEscopo {

    public static $Digital;

    function __construct($Produto, $Valor){
        parent::__construct($Produto, $Valor);
    }

    public function Vender(){
        self::$Digital += 1;
        parent::Vender();
    }

}