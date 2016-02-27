<META CHARSET="UTF-8">
<?php
require('./inc/Config.inc.php');

$raul = new AssociacaoCliente('Raul','campus@upinside.com.br');

$prophp = new AgregacaoProduto('20','Pro PHP', 334.90);
$wsphp = new AgregacaoProduto('21','WS PHP', 289.90);
$wshtml = new AgregacaoProduto('22','WS HTML5', 289.90);

$outrocurso = new stdClass();
$outrocurso->Produto = '23';
$outrocurso->Nome = 'Curso de jQuery';
$outrocurso->Valor = 400;

$carrinho = new AgregacaoCarrinho($raul);

$carrinho->Add($prophp);
$carrinho->Add($wsphp);
$carrinho->Add($wshtml);

$carrinho->Remove($wsphp);
//$carrinho->Add($outrocurso); //Não vai funciona pois a função so aceita atributo da classe AgregacaoProduto

var_dump($carrinho);
echo "<hr>";
var_dump($raul, $prophp, $outrocurso);