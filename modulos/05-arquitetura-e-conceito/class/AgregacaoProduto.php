<?php
/**
 * Created by PhpStorm.
 * User: Raul
 * Date: 19/03/2015
 * Time: 01:53
 */

class AgregacaoProduto {

    private $Produto;
    private $Nome;
    private $Valor;

    function __construct($Produto, $Nome, $Valor)
    {
        $this->Produto = $Produto;
        $this->Nome = $Nome;
        $this->Valor = $Valor;
    }

    /**
     * @return mixed
     */
    public function getProduto()
    {
        return $this->Produto;
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
    public function getValor()
    {
        return $this->Valor;
    }




}