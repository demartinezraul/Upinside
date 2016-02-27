<META CHARSET="UTF-8">
<?php
require('./_app/Config.inc.php');

$Conn = new Conn();

try{
    $Query = "SELECT * FROM ws_siteviews_agent WHERE agent_name = :name";
    $Exe = $Conn->getConn()->prepare($Query);

    $Exe->bindValue(":name", 'Chrome');
    $Exe->execute();

    $Chrome = $Exe->fetch(PDO::FETCH_ASSOC);

    $Exe->bindValue(":name", 'Safari');
    $Exe->execute();

    $Safari = $Exe->fetch(PDO::FETCH_ASSOC);

} catch (PDOException $e){
    PHPErro($e->getCode(), $e->getMessage(), $e->getFile(), $e->getLile());
}

if($Chrome):
    //var_dump($Chrome);
    echo "{$Chrome['agent_name']} tem {$Chrome['agent_views']} visita(s)<hr>";
endif;

if($Safari):
    //var_dump($Safari);
    echo "{$Safari['agent_name']} tem {$Safari['agent_views']} visita(s)<hr>";
endif;