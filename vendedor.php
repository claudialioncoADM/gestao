<?php

class Vendedor extends Funcionario
{
    public $percentualComissao;

    public function __construct($matricula, $anoContratacao, $salarioBase, $nome, $percentualComissao)
    {
        $this->percentualComissao = $percentualComissao;
        parent::__construct($matricula, $anoContratacao, $salarioBase, $nome);
    }

    public function calculaSalario($mes, $ano) // polimorfismo de funcionario
    {
        $valorComissao = 0;
        return ($this->salarioBase + $valorComissao);
    }
}
