<META CHARSET="UTF-8">
<?php
require('./Interface/IAluno.php');
require('./inc/Config.inc.php');

$aluno = new TrabalhoComInterfaces('Raul', 'PHP OO');

$aluno->Formar();
$aluno->Matricular('WS PHP');
$aluno->Formar();


var_dump($aluno);
