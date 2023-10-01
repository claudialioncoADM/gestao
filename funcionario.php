<?php

abstract class Funcionario
{
    public $matricula;
    public $anoContratacao;
    public $salarioBase;
    public $nome;

    public function __construct($matricula, $anoContratacao, $salarioBase, $nome)
    {
        $this->matricula = $matricula;
        $this->anoContratacao = $anoContratacao;
        $this->salarioBase = $salarioBase;
        $this->nome = $nome;
    }

    public function calculaSalario($mes, $ano)
    {
        return $this->salarioBase;
    }
}
