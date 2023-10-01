<?php

class Secretaria extends Funcionario // herança funcionário
{
    public function __construct($matricula, $anoContratacao, $salarioBase, $nome)
    {
        parent::__construct($matricula, $anoContratacao, $salarioBase, $nome);
    }

    public function calculaSalario($mes, $ano) // polimorfismo de funcionario
    {
        $adicional = $this->salarioBase * 0.05;
        return ($this->salarioBase + $adicional);
    }
}
