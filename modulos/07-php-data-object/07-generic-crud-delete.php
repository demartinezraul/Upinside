<META CHARSET="UTF-8">
<?php
require('./_app/Config.inc.php');

$delete = new Delete;
$delete->ExeDelete('ws_siteviews_agent', "WHERE agent_id >= :id", 'id=1');

if($delete->getResult()):
    echo "{$delete->getRowCount()} registro(s) removidos com sucesso<hr>";
endif;

//var_dump($delete);