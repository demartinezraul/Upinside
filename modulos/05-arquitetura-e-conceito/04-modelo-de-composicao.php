<META CHARSET="UTF-8">
<?php
require('./inc/Config.inc.php');

$raul = new ComposicaoUsuario('Raul','contato@upinside.com');
$raul->CadastrarEndereco('Franca','São Paulo');
$raul->setNome('Raul Martinez');

echo "O email de {$raul->getNome()} é {$raul->getEmail()}<br>";
echo "{$raul->getNome()} mora em {$raul->getEndereco()->getCidade()}/{$raul->getEndereco()->getEstado()}";

var_dump($raul);