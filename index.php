<?php

require('empresa.php');
require('financeiro.php');
require('funcionario.php');
require('produto.php');
require('secretaria.php');
require('venda.php');
require('vendedor.php');

$flexxo = new Empresa();

$pedro = new Vendedor(1, 2023, 1300.01, 'Pedro Santista', 0.20);
$flexxo->funcionarios[] = $pedro;

$antonio = new Secretaria(2, 2023, 1700.01, 'Antônio Santista');
$flexxo->funcionarios[] = $antonio;

$carro = new Produto(1, 50000, 'Uno');

$venda1 = new Venda;
$venda1->vendedor = $pedro;
$venda1->produto = $carro;
$venda1->mes = 8;
$venda1->ano = 2023;
var_dump($venda1);

$caixa = new Financeiro;
$caixa->vendas[] = $venda1;
var_dump($caixa);

$vendasPedro = $caixa->getVendasDeFuncionario($pedro);
echo('Pedro:' . $vendasPedro);

$folhaPgto = $flexxo->calculaValorFolhaPgto();
echo ('Folha:'.$folhaPgto);