<META CHARSET="UTF-8">
<?php
require('./inc/Config.inc.php');

$raul = new AssociacaoCliente("Raul",'contato@upinside.com');

//$raul = new stdClass(); // nao poderar ser acessas porque nossa classe ta pedindo os metódos e não o atributo
//$raul->Nome = 'Raul'; // nao poderar ser acessas porque nossa classe ta pedindo os metódos e não o atributo
//$raul->Email = 'contato';// nao poderar ser acessas porque nossa classe ta pedindo os metódos e não o atributo

$login = new AssociacaoLogin($raul);

if($login->getLogin()):
    echo "Gerenciando o cliente id: {$login->getCliente()->getCliente()}<br>";
    echo "{$login->getCliente()->getNome()} logou com sucesso usando o e-mail {$login->getCliente()->getEmail()}<br>";
else:
    echo 'Erro ao logar:';
endif;


var_dump($raul, $login);