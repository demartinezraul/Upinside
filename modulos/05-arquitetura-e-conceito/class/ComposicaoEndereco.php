<?php
/**
 * Created by PhpStorm.
 * User: Raul
 * Date: 19/03/2015
 * Time: 02:26
 */

class ComposicaoEndereco {

    private $Cidade;
    private $Estado;

    function __construct($Cidade, $Estado)
    {
        $this->Cidade = $Cidade;
        $this->Estado = $Estado;
    }

    /**
     * @return mixed
     */
    public function getCidade()
    {
        return $this->Cidade;
    }

    /**
     * @return mixed
     */
    public function getEstado()
    {
        return $this->Estado;
    }




}