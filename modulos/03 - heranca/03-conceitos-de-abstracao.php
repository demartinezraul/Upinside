<META CHARSET="UTF-8">
<?php

require('./inc/Config.inc.php');
/*
$conta = new Abstracao('Raul', 500);
$contaDois = new Abstracao('Marcos', 300);

$conta->Depositar(1000);
$conta->Sacar(500);
$conta->Transferir(500,$conta);
$conta->Transferir(500,$contaDois);


var_dump($conta, $contaDois);
*/

$cc = new AbstracaoCC('Raul', 0, 1000);
$cp = new AbstracaoCP('Raul', 0);

$cc->Depositar(1000);
$cc->Sacar(500);
$cc->Transferir(500, $cp);

$cp->Depositar(1000);
$cp->Sacar(500);
$cp->Transferir(500, $cc);


$cc->VerSaldo();
$cp->VerSaldo();

var_dump($cc, $cp);