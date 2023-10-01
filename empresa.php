<?php

class Empresa
{
    public $funcionarios = [];

    public function calculaValorFolhaPgto()
    {
        $totalFolhaPgto = 0;
        $mes = 8;
        $ano = 2023;

        foreach ($this->funcionarios as $funcionario) {
            $totalFolhaPgto += $funcionario->calculaSalario($mes, $ano);
        }

        return $totalFolhaPgto;
    }
}
