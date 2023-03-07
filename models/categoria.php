<?php

class Categoria{
    public $nome;
    public $icona;

    function __construct(string $_nome, string $_icona)
    {
        $this->nome = $_nome;
        $this->icona = $_icona;
    }

    // public function getNome(){
    //     return $this->nome;
    // }
    // public function getIcona()
    // {
    //     return $this->icona;
    // }
}