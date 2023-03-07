<?php
require_once __DIR__ . './prodotti.php';
require_once __DIR__ . './categoria.php';

class Cucce extends Prodotti
{
    public $materiale;
    public $forma;

    function __construct(
        Categoria $_categoria,
        string $_nome_prod,
        float $_prezzo,
        bool $_dispo,
        string $_img,
        string $_materiale,
        string $_forma
    ) {
        parent::__construct(
            $_categoria,
            $_nome_prod,
            $_prezzo,
            $_dispo,
            $_img
        );

        $this->materiale = $_materiale;
        $this->forma = $_forma;
    }
}