<?php
/**
 * Created by PhpStorm.
 * User: Raul
 * Date: 13/03/2015
 * Time: 01:46
 */

/**
 * <b>Class Heranca:</b> é herdar todos os atributos e metodos quando acessiveis
 * sem precisar refazer a escrita facilitando na manipulação da orientação a objeto
 *
 */
class Heranca {

    public $Nome;
    public $Idade;
    public $Formacao;

    function __construct($Nome, $Idade)
    {
        $this->Nome = $Nome;
        $this->Idade = $Idade;
        $this->Formacao = array();
    }

    public function Envelhecer(){
        $this->Idade += 1;
    }

    public function Formar($Cursos){
        $this->Formacao[] = (string) $Cursos;
    }

    public function VerPessoa(){
        $Formacao = implode(', ', $this->Formacao);
        echo "{$this->Nome} tem {$this->Idade} anos de idade, e é formado em: {$Formacao} <hr>";
    }


}