<?php

class Produto
{
    public $codigo;
    public $valor;
    public $decricao;

    public function __construct($codigo, $valor, $descricao)
    {
        $this->codigo = $codigo;
        $this->valor=$valor;
        $this->decricao = $descricao;
       
    }
}
