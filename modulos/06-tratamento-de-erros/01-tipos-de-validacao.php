<META CHARSET="UTF-8">

<h3>Tratamento por existência:</h3>
<hr>
<?php


$string = 'contato';
$string = 3;
$string = '';


if(is_string($string)):
    echo "String é uma string:";
elseif(!is_string($string)):
    echo "String não é uma string:";
endif;

echo "<hr>";

if(!empty($string)):
    echo "String existe e tem valor";
    elseif(isset($string)):
    echo "String existe mas está em branco";
endif;
?>

<hr><hr>
<h3>Tomada de decisão:</h3>

<?php
$decisao = 'studio@upinside.com.br';

if(!filter_var($decisao, FILTER_VALIDATE_EMAIL)):
    echo "E-mail informado é inválido";
elseif($decisao == 'campus@upinside.com.br'):
    die("esse e-mail é restrito");
else:
    echo "e-mail válido";
endif;

echo ":)";

?>

<hr><hr>
<h3>Retorno de Flags:</h3>
<hr>
<?php
function Idade($Idade = null){
    if(!$Idade):
        return false;
    elseif(!is_int($Idade)):
        return false;
    endif;

    return "Você nasceu em: ". (date('Y') -1 - $Idade);
}
$idade = 'abs';
$idade = '27';
$idade = 20;

if(Idade($idade)):
    echo Idade($idade);
else:
    echo "Erro, informe um INT idade";
endif;
?>

<hr><hr>
<h3>Retorno de Flags:</h3>
<hr>

<?php
$um = 10;
$dois = '10';

if($um == $dois):
    echo "Um tem o mesmo valor de dois";
elseif($um != $dois):
    echo "Um e dois tem valor diferente:";
endif;

echo "<hr>";

$um = 10;
$dois = 10;

if($um === $dois):
    echo "Um e dois tem o mesmo valor e são do mesmo tipo";
elseif ($um !== $dois):
    echo "Um e dois tem valor e o tipo diferente";
endif;



?>




