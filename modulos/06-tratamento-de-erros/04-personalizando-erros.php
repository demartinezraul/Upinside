<META CHARSET="UTF-8">
<link rel="stylesheet" href="css/reset.css">
<?php
require('./_app/Config.inc.php');

trigger_error("Essa é uma NOTICE:", E_USER_NOTICE);
trigger_error("Essa é uma ALERTA:", E_USER_WARNING);
//trigger_error("Essa é uma ERRO:", E_USER_ERROR);
PHPErro(WS_ERROR, "Esse é um ERRO personalizado!", __FILE__, __LINE__);

WSErro("Esse é um ACCEPT", WS_ACCEPT);

try{
    throw new Exception("Essa é uma excessão!", E_USER_WARNING);

} catch (Exception $e){

    PHPErro($e->getCode(), $e->getMessage(), $e->getFile(), $e->getLine());
    WSErro($e->getMessage(), WS_ACCEPT);

}