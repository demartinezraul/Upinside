<?php
require('./class/ComportamentoInicial.php');

/*
$raul = new ComportamentoInicial;
$raul->Nome = 'Raul';
$raul->Salario = 'banana';
*/

$raul = new ComportamentoInicial('Raul',20,'Programador',3600);
$marcos = new ComportamentoInicial('Marcos',32,'Programador',5600);
$pedro = new ComportamentoInicial('Raul',20,'Programador',1800);



var_dump($raul);
$raul->ver();
