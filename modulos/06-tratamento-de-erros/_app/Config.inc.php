<?php
// CONFIGURAÇÃO DO SITE ####################
// AUTO LOAD DE CLASSES ####################

function __autoload($Class){
    $dirName = 'class';

    if(file_exists("{$dirName}/{$Class}.php")):
        require_once("{$dirName}/{$Class}.php");
    else:
        die("Erro ao incluir {$dirName}/{$Class}.php <hr>");
    endif;
}

// TRATAMENTO DE ERROS #####################
// CSS constantes :: Mensagens de erro
define('WS_ACCEPT','accept');
define('WS_INFOR','infor');
define('WS_ALERT','alert');
define('WS_ERROR','error');

//WSErro :: Exibe erros lançados :: Front
function WSErro($ErrMsg, $ErrNo, $ErrDie = null)
{
    $CssClass = ($ErrNo == E_USER_NOTICE ? WS_INFOR : ($ErrNo == E_USER_WARNING ? WS_ALERT : ($ErrNo == E_USER_ERROR ? WS_ERROR : $ErrNo)));
    echo "<p class=\"trigger {$CssClass}\">{$ErrMsg}<span class=\"ajax_close\"></span></p>";

    if ($ErrDie):
        die;
    endif;
}

//PHPErro :: personaliza o gatilho do PHP
function PHPErro($ErrNo, $ErrMsg, $ErrFile, $ErrLine){
    $CssClass = ($ErrNo == E_USER_NOTICE ? WS_INFOR : ($ErrNo == E_USER_WARNING ? WS_ALERT : ($ErrNo == E_USER_ERROR ? WS_ERROR : $ErrNo)));
    echo "<p class=\"trigger {$CssClass}\">";
    echo "<b>Erro na linha: {$ErrLine} ::</b> {$ErrMsg}<br>";
    echo "<small>{$ErrFile}</small>";
    echo "<span class=\"ajax_close\"></span></p>";

    if($ErrNo == E_USER_ERROR):
        die;
    endif;
}

set_error_handler('PHPErro');