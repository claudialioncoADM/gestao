<?php

class Financeiro
{
    public $vendas = [];

    public function getVendasDeFuncionario(Funcionario $funcionario)
    {
        foreach ($this->vendas as $venda) {
            $totalVendas = 0;
            if ($venda->vendedor->matricula == $funcionario->matricula) {
                $totalVendas += $venda->produto->valor;
            }
        }

        return $totalVendas;
    }
}
