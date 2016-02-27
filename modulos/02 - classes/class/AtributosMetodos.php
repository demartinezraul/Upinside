<?php
/**
 * Created by PhpStorm.
 * User: Raul
 * Date: 09/03/15
 * Time: 01:12
 */

class AtributosMetodos {
    var $Nome;
    var $Idade;
    var $Profissao;

    function setUsuario($Nome, $Idade, $Profissao){
        $this->Nome = $Nome;
        $this->Profissao = $Profissao;
        $this->setIdade($Idade);

    }

    function getUsuario(){
        return "{$this->Nome} tem {$this->Idade} anos de idade, E trabalha como {$this->Profissao}";

    }
    function getClasse(){
        echo "<pre>";
        print_r($this);
        echo "</pre>";
    }

    function setIdade($Idade){
        if(!is_int($Idade)):
            die('Idade informada é incorreta!');
        else:
            $this->Idade = $Idade;
        endif;

    }

    function Envelhecer(){
        $this->Idade = $this->Idade + 1;
    }

} 