<META CHARSET="UTF-8">
<?php
require('./_app/Config.inc.php');

$Dados = ['agent_name' => 'firefox', 'agent_views' => '120'];

$update = new Update;
$update->ExeUpdate('ws_siteviews_agent', $Dados, "WHERE agent_id = :id", 'id=1');

if($update->getResult()):
    echo "{$update->getRowCount()} dado(s) atualizados com sucesso <hr>";
endif;

//$update->setPlaces('id=21');
//$update->setPlaces('id=23');
//$update->setPlaces('id=24');
//var_dump($update);