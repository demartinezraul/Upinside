<META CHARSET="UTF-8">
<?php
require('./inc/Config.inc.php');

$produto = new ResolucaoDeEscopo('Libro de PHP', 59.90);
$digital = new ResolucaoDeEscopoDigital('Libro de PHP', 39.90);

$produto->Vender();
$produto->Vender();
$produto->Vender();

$digital->Vender();
$digital->Vender();

//$produto->Relatorio(); /* Acessando o objeto dentro da classe */
ResolucaoDeEscopo::Relatorio(); /* Acessando o metodo de fora da classe static */
echo ResolucaoDeEscopoDigital::$Digital . " Livros digitais <br>";
echo ResolucaoDeEscopoDigital::$Vendas - ResolucaoDeEscopoDigital::$Digital, " Livros impressos";

var_dump($produto, $digital);
