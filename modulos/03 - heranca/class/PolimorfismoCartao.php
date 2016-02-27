<?php
/**
 * Created by PhpStorm.
 * User: Raul
 * Date: 13/03/2015
 * Time: 03:04
 */

class PolimorfismoCartao extends Polimorfismo {
    /* @var $juros = definir o valor do juros do cartão*/
    public $Juros;
    /* @var $Encargos = Saber qual o total de juros do cartão */
    public $Encargos;
    /* @var $Parcela = Saber o valor de cada parcela do cartão */
    public $Parcela;
    /* @var $NumParcelas = Saber o numero de parcelas escolhidas pelo nosso cliente na hora de executar o pagamento */
    public $NumParcelas;

    /**
     * @param $Produto
     * @param $Valor
     * parent:: = Executa todos os metodos e atributos que está dentro do construtor da classe pai
     */
    function __construct($Produto, $Valor){
        parent::__construct($Produto, $Valor);
        $this->Juros = 1.17;
        $this->Metodo = 'Cartão de Credito';
    }

    public function Pagar($Parcelas = null){
        $this->setNumParcelas($Parcelas);
        $this->setEncargos();

        $this->Valor = $this->Valor + $this->Encargos;
        $this->Parcela = $this->Valor / $this->NumParcelas;

        echo "Você pagou {$this->Real($this->Valor)} por um {$this->Produto}<br>";
        echo"<small>Pagamento efetuado via {$this->Metodo} em {$this->NumParcelas}x  iguais de {$this->Real($this->Parcela)} </small><hr>";
    }

    /** para 5,5% informe 5.5 */
    public function setJuros($Juros)
    {
        $this->Juros = $Juros;
    }

    /**
     * @param mixed $Encargos
     */
    public function setEncargos()
    {
        $this->Encargos = ($this->Valor * ($this->Juros / 100)) * $this->NumParcelas;
    }

    /**
     * @param mixed $NumParcelas
     */
    public function setNumParcelas($NumParcelas)
    {
        $this->NumParcelas = ( (int) $NumParcelas >= 1 ? $NumParcelas : 1);
    }


}