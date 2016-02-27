<meta charset="UTF-8">
<?php
require('class/ClassesObjetos.php');
    $teste = new ClassesObjetos();
    $teste->getClass('De introdução','para mostrar uma classe');
    $teste->verClass();

    $teste->Classe = 'Classe 2';
    $teste->Funcao = 'Ver os Atributos';
    $teste->verClass();
    var_dump($teste);
?>