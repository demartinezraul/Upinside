<META CHARSET="UTF-8">
<?php

$uso = '98745634523';
$cpf = '';
$cpf = '500';
$cpf = $uso;
$cpf = '123456789101';

if(!$cpf):
    trigger_error("Informe seu CPF", E_USER_NOTICE);
elseif($cpf == '500'):
    trigger_error("Formato não é mais utilizado!", E_USER_DEPRECATED);
elseif($cpf == $uso):
    trigger_error("CPF em uso!", E_USER_WARNING);
elseif(!preg_match('/^[0-9]*$/i', $cpf) && strlen($cpf) != 11):
    trigger_error("CPF invalido", E_USER_ERROR);
else:
    echo "CPF Válido!";
endif;

echo ":)";
echo "<hr>";

/**
 * @var Personalizando erro
 */
function Erro($Erro, $Mensagem, $Arquivo, $Linha){
    $erro = ($Erro == E_USER_ERROR ? 'red' :($Erro == E_USER_WARNING ? 'darkorange' : 'blue'));
    echo "<p style='color:{$erro}'> Erro na linha = {$Linha}: {$Mensagem}<br>";
    echo "<small>{$Arquivo}</small></p>";

    if($Erro == E_USER_ERROR): // Travando o codigo
        die;
    endif;
}

set_error_handler('Erro');

$uso = '98745634523';
$cpf = '';
$cpf = '500';
$cpf = $uso;
$cpf = 'abs';

if(!$cpf):
    trigger_error("Informe seu CPF", E_USER_NOTICE);
elseif($cpf == '500'):
    trigger_error("Formato não é mais utilizado!", E_USER_DEPRECATED);
elseif($cpf == $uso):
    trigger_error("CPF em uso!", E_USER_WARNING);
elseif(!preg_match('/^[0-9]*$/i', $cpf) && strlen($cpf) != 11):
    trigger_error("CPF invalido", E_USER_ERROR);
else:
    echo "CPF Válido!";
endif;

echo ":)";