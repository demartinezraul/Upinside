<META CHARSET="UTF-8">
<?php
    require('./class/ModelagemDeClasse.php');

    $raul = new ModelagemDeClasse('Raul', 20, 'Programador', 1200);
    $raul->setProfissao('Web Master');

    $raul->Trabalhar('um portal', 12000);
    $raul->setNome('Raul Ramos Martinez');

    var_dump($raul);

?>