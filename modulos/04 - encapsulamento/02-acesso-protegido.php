<META CHARSET="UTF-8">
<?php
require('./inc/Config.inc.php');

$maria = new AcessoProtegido('Maria','maria@server.com');
$maria->Nome = 'Maria Santos';
//$maria->Email = 'mariasant@server.com'; // nao consigo acessar pois o metodos esta protegido PROTECTED
$maria->setEmail('mariasantos@email.com');
//$maria->setNome('Pablo');

var_dump($maria);
echo "<hr>";

$pablo = new AcessoProtegidoFilha('Pablo','pablo.@email.com');
//$pablo->setNome();
$pablo->addCpf('Pablo Silva','09811213454');

var_dump($pablo);