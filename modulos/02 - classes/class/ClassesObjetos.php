<?php
/**
 * Created by PhpStorm.
 * User: Raul
 * Date: 09/03/15
 * Time: 00:53
 */

class ClassesObjetos {
    var $Classe;
    var $Funcao;

    function getClass($Class, $Funcao){
        echo "<p> A classe {$Class} serve para {$Funcao}";

    }

    function verClass(){
        echo "<pre>";
        print_r($this); //pseudovariavel Referencia os atributos da propria classe (ESTE=($this))
        echo "</pre>";
    }

} 