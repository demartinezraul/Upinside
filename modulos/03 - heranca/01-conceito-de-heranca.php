<META CHARSET="UTF-8">
<?php
 require('./inc/Config.inc.php');
$pessoa = new Heranca('Raul', 20);
$pessoa->Formar('Pro PHP');
$pessoa->Formar('WS PHP');
$pessoa->Envelhecer();
$pessoa->VerPessoa();
var_dump($pessoa);
echo "<hr>";

$pessoaME = new HerancaJuridica('Raul', 20,'UPINSIDE TECNOLOGIA');
$pessoaME->Formar('Pro PHP');
$pessoaME->Formar('WS PHP');
$pessoaME->Envelhecer();
$pessoaME->VerPessoa();

$pessoaME->Contratar('Marcos');
$pessoaME->Contratar('Maria');
$pessoaME->VerEmpresa();
var_dump($pessoaME);
