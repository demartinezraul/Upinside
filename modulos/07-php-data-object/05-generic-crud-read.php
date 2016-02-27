<META CHARSET="UTF8">
<?php
require('./_app/Config.inc.php');

$read = new Read;
$read->ExeRead('ws_siteviews_agent', 'WHERE agent_name = :name AND agent_views >= :views LIMIT :limit', "name=firefox&views=10&limit=3");
//$read->setPlaces("name=Chrome&views=18&limit=2");
//$read->setPlaces("name=IE&views=5&limit=2");

// Verificando resultado da query
if($read->getRowCount() >= 1):
    var_dump($read->getResult());
    echo '<hr>';
endif;

$read->FullRead("SELECT * FROM ws_siteviews_agent LIMIT :limit", "limit=2");
$read->FullRead("SELECT * FROM ws_siteviews_agent WHERE agent_name = :name LIMIT :limit OFFSET :offset","name=Chrome&limit=2&offset=2");

var_dump($read);