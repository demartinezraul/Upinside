<?php

function __autoload($Class){
    $dirName = 'class';

    if(file_exists("{$dirName}/{$Class}.php")):
        require_once("{$dirName}/{$Class}.php");
    else:
        die("Erro ao incluir {$dirName}/{$Class}.php <hr>");
    endif;
}