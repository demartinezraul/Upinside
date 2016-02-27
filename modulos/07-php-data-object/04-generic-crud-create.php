<META CHARSET="UTF-8">
<?php
require('./_app/Config.inc.php');

$Dados = ['agent_name' => 'IE', 'agent_views' => '5000'];

$Cadastra = new Create;
$Cadastra->ExeCreate('ws_siteviews_agent', $Dados);

if($Cadastra->getResult()):
    echo "Cadastro com sucesso!<hr>";
endif;

var_dump($Cadastra);