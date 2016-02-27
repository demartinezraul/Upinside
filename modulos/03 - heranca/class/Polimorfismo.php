<?php
/**
 * Created by PhpStorm.
 * User: Raul
 * Date: 13/03/2015
 * Time: 02:40
 */

class Polimorfismo {

    public $Produto;
    public $Valor;
    public $Metodo;

    function __construct($Produto, $Valor)
    {
        $this->Produto = $Produto;
        $this->Valor = $Valor;
        $this->Metodo = 'Boleto';
    }

    public function Pagar(){
        echo "Você pagou {$this->Real($this->Valor)} por um {$this->Produto}<br>";
        echo "<small>Pagamento efetuado via {$this->Metodo}</small><br>";

    }

    public function Real($Valor){
        return "R$ " . number_format($Valor,'2','.',',');
    }

}