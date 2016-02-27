<?php
require('inc/Config.inc.php');

$classeA = new ClassesObjetos;
$classeB = new AtributosMetodos;
$classeC = new ComportamentoInicial('Raul', 20, 'Programador', 2200);

var_dump($classeA, $classeB, $classeC);

?>