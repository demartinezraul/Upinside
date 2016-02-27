<?php
require('./class/InteracaoClasse.php');
require('./class/InteracaDeObjetos.php');

$raul = new InteracaoClasse('Raul', 20, 'Programador', 1000);
$marcos = new InteracaoClasse('Marcos', 25,'desing', 500);

$upinside = new InteracaDeObjetos('UPINSIDE TECNOLOGIA');
$upinside->Contratar($raul, 'Web Master', 3600);
$upinside->Pagar();
$upinside->Promover('Gerente de projeto', 12000);
$upinside->Pagar();
//$upinside->Demitir(5600);

$upinside->Contratar($marcos,'Design', 2200);
$upinside->Pagar();
$upinside->Promover('Administrador de Projetos');

$upinside->Funcionarios($raul);
$upinside->Pagar();

var_dump($raul, $marcos, $upinside);