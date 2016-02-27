<?php
/**
 * Created by PhpStorm.
 * User: Raul
 * Date: 16/03/2015
 * Time: 01:00
 */

class ResolucaoDeEscopo {

    public $Produto;
    public $Valor;
    /**
     * @var static $Vendas: Não pode ser acessado por um objeto,
     * ele é so um atributo da classe.
     */
    public static $Vendas;
    public static $Lucros;

    function __construct($Produto, $Valor)
    {
        $this->Produto = $Produto;
        $this->Valor = $Valor;
    }

    public function Vender(){
        self::$Vendas += 1;
        self::$Lucros = $this->Valor * self::$Vendas;
        echo "{$this->Produto} vendido por R$ {$this->Valor}<br>";
    }

    public static function  Relatorio(){
        echo "<hr>";
        echo "Este produto vendeu " . self::$Vendas . " unidade(s). Total R$" . self::$Lucros;
        echo "<hr>";
    }

}