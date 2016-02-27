<META CHARSET="UTF-8">
<?php
    require('./class/ReplicaClonagem.php');
    $readA = new ReplicaClonagem("posts", "categoria = 'categoria'", 'ORDER BY data DESC');
    $readA->Ler();
    $readA->setTermos("categoria = 'internet'");

    $readB = Clone($readA);
    $readB->setTermos("categoria = 'redes sociais'");

    $readC = Clone($readA);
    $readC->setTabela('comentarios');
    $readC->setTermos('post = 25');

    $readA->Ler();
    $readB->Ler();
    $readC->Ler();

var_dump($readA, $readB, $readC);
?>