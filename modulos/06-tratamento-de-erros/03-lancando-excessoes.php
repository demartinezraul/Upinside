<META CHARSET="UTF-8">
<?php
$eu = null;

if(!$eu):
    $a = new Exception("Eu é NULL", E_USER_NOTICE);
endif;

echo $a->getMessage();
var_dump($a);
echo "<hr>";

try{

    if(!$eu):
        throw new Exception("Eu novamente está NULL", E_USER_NOTICE);
    endif;

} catch (Exception $e){
    echo "<p>Erro #{$e->getCode()}: {$e->getMessage()}<br>";
    echo "<smail>{$e->getFile()} na linha {$e->getLine()}</smail></p>";

//    echo "<hr>";
//    echo $e->xdebug_message; // mensagem de erro original do php

}