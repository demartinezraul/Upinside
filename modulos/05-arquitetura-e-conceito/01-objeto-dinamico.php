<META CHARSET="UTF-8">
<?php
require('./inc/Config.inc.php');
$cliente = new ObjetoDinamico;

$raul = new stdClass();
$raul->Nome = 'Raul';
$raul->Email = 'contato@upinside.com.br';

$cliente->Novo($raul);

$marcos = clone($raul);
$marcos->Nome = 'Marcos';
$marcos->Email = 'banana';



var_dump($cliente, $raul, $marcos);