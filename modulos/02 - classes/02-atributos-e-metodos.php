<META CHARSET="UTF-8">
<?php
require('class/AtributosMetodos.php');
$pessoa = new AtributosMetodos();
$pessoa->setUsuario('Raul',20,'Estagiário');
$usuario = $pessoa->getUsuario();
echo $usuario;

echo "<hr>";

$pessoa->Idade = 'Banana'; // Inserindo valor na propria variavel

/*
 *  Executando o valor no metodo
 * setUsuario responsavel por fazer os tratamentos no atributo
 */
$pessoa->setUsuario('Raul',20,'Web Master');
$pessoa->setIdade(20); // Inserinto o valor no atributo sem informar os outros atributos
$pessoa->Envelhecer();


var_dump($pessoa);
$pessoa->getClasse();