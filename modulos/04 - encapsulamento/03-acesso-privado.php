<META CHARSET="UTF-8">
<?php
require('./inc/Config.inc.php');

$raul = new AcessoPrivado('Raul','contato@email.com', 12332132322);
$raul->setNome('Kairo');

var_dump($raul);