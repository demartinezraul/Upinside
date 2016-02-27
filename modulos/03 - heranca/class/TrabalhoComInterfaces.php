<?php
/**
 * Created by PhpStorm.
 * User: Raul
 * Date: 16/03/2015
 * Time: 00:45
 */

class TrabalhoComInterfaces implements IAluno {
    public $Aluno;
    public $Curso;
    public $Formacao;

    function __construct($Aluno, $Curso)
    {
        $this->Aluno = $Aluno;
        $this->Curso = $Curso;
        $this->Formacao = [];
    }
    public function Matricular($Curso){
        $this->Curso = $Curso;
        echo "{$this->Aluno} foi matriculado no curso {$this->Curso} <br>";
    }

    public function Formar(){
        $this->Formacao[] = $this->Curso;
        echo "{$this->Aluno} formou-se no curso {$this->Curso} <br>";


    }

}