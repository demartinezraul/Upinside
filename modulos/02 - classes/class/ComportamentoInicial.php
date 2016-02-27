<?php
/**
 * Created by PhpStorm.
 * User: Raul
 * Date: 09/03/15
 * Time: 01:41
 */

class ComportamentoInicial {

    var $Nome, $Idade, $Profissao, $Salario;

    /*
     * __construct Será executado automaticamente quando eu instancia
     * os elementos da classe
     */
    function __construct($Nome, $Idade, $Profissao, $Salario){ // elemento magico
        $this->Nome = (string) $Nome;
        $this->Idade = (int) $Idade;
        $this->Profissao = (string) $Profissao;
        $this->Salario = (float) $Salario;
        echo "O objeto {$this->Nome} foi iniciado. <hr>";
    }

    function __destruct(){ // destruindo o elemento magico assim liberando a memoria
        echo "O objeto {$this->Nome} foi destruido <hr>";
    }

    function ver(){
        echo "<pre>";
        print_r($this);
        echo "</pre>";
    }

} 