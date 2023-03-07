<?php
require_once __DIR__ . './prodotti.php';
require_once __DIR__ . './categoria.php';

class Cibo extends Prodotti{
    public $tipo;
    public $eta;
    public $gusto;
    public $peso_prodotto;

    function __construct(
        Categoria $_categoria,
        string $_nome_prod,
        float $_prezzo,
        bool $_dispo,
        string $_img,
        string $_tipo,
        string $_eta,
        string $_gusto,
        float $_peso)
    {
        parent::__construct(
        $_categoria,
        $_nome_prod,
        $_prezzo,
        $_dispo,
        $_img);

        $this->tipo=$_tipo;
        $this->eta = $_eta;
        $this->gusto=$_gusto;
        $this->peso_prodotto = $_peso;
    }
}