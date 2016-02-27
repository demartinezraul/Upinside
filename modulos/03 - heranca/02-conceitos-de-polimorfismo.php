<META CHARSET="UTF-8">
<?php
require('./inc/Config.inc.php');
$boleto = new Polimorfismo('Pro PHP','334.90');
$boleto->Pagar();

var_dump($boleto);
echo "<hr>";

$deposito = new PolimorfismoDeposito('Pro PHP',' 334.90');
$deposito->Pagar();

var_dump($deposito);
echo "<hr>";

$cartao = new PolimorfismoCartao('Pro PHP',' 334.90');
$cartao->Pagar();
$cartao->Pagar(10);

var_dump($cartao);