<META CHARSET="UTF-8">
<?php
require('./inc/Config.inc.php');
$raul = new AcessoPublico('Raul','campus@upinside.com');
$raul->Nome = 'Marcos';
$raul->Email = 'marcos@email.com';

$raul->Email = 'banana'; // Passar banana ele vai aceitar pois o atributo é publico

var_dump($raul);
