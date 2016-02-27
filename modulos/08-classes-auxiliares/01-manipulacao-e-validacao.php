<META CHARSET="UTF-8">
<?php
require('./_app/Config.inc.php');

$Email = 'Raul@upinside.com';
/* Verificando se e-mail é valido */
if(Check::Email($Email)):
    echo "Válido! <hr>";
else:
    echo "Inválido! <hr>";
endif;

/* Tratando texto em forma de traços no lugar de espaço */
$Name = 'Estamos aprendendo PHP. veja você como é:!';
echo check::Name($Name). "<hr>";

/* Passando data com formato que especificamos */
$Data = '05/01/2014 13:14:20';
$Data = '27/03/2015';
echo check::Data($Data) . "<hr>";


//var_dump($check);