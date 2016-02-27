<?php
/**
 * Created by PhpStorm.
 * User: Raul
 * Date: 27/03/2015
 * Time: 02:25
 */

/**
 * Class Check [HELPERS]
 * Classe responsável por manipular e validar dados do sistema
 *
 */
class Check {
    private static $Data;
    private static $Format;

    /** @var Verificando se o email é valido */
    public static function Email($Email){
        self::$Data = (string) $Email;
        self::$Format = '/[a-z0-9_\.\-]+@[a-z0-9_\.\-]*[a-z0-9_\.\-]+\.[a-z]{2,4}$/';

        if(preg_match(self::$Format, self::$Data)):
            return true;
        else:
            return false;
        endif;
    }

    /** @var validando nome  para criar URL amigavel apartir de uma string*/
    public static function Name($Name){
        self::$Format = array();
        self::$Format['a'] = 'ÀÁÂÃÄÅÆÇÈÉÊËÌÍÎÏÐÑÒÓÔÕÖØÙÚÛÜüÝÞßàáâãäåæçèéêëìíîïðñòóôõöøùúûýýþÿRr"!@#$%&*()_-+={[}]/?;:.,\\\'<>°ºª';
        self::$Format['b'] = 'aaaaaaaceeeeiiiidnoooooouuuuuybsaaaaaaaceeeeiiiidnoooooouuuyybyRr                                 ';

        /* fazendo uma string translate substituindo a string ['a] por ['b'] */
        self::$Data = strtr(utf8_decode($Name), utf8_decode(self::$Format['a']), self::$Format['b']);
        /* eliminando espaços desnecessario e codigos HTML */
        self::$Data = strip_tags(trim(self::$Data));
        /* subtituindo os espaços por traços */
        self::$Data = str_replace(' ', '-', self::$Data);
        /* eliminando traços duplicados */
        self::$Data = str_replace(array('-----','----','---','--'), '-', self::$Data);


        // voltando os caracteres tudo em caixa baixa utf8 para voltar a codificação dos caracteres
        return strtolower(utf8_encode(self::$Data));
    }

    public static function Data($Data){
        /* Separando a data da hora */
        self::$Format = explode(' ', $Data);
        /* Separar cada parametro da barra da data*/
        self::$Data = explode('/', self::$Format[0]);
        /* validando para quando nao for informado o tempo criar automaticamento no sistema*/
        if(empty(self::$Format[1])): // 1 significa que nao foi informado o tempo
            self::$Format[1] = date('H:i:s');
        endif;
        /* Data fica em formato de array dividido por dia / mes / ano */
        self::$Data = self::$Data[2] . '-' . self::$Data[1] . '-' . self::$Data[0] . ' ' . self::$Format[1];
        return self::$Data;
    }


}