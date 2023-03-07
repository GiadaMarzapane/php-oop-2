<?php
require_once __DIR__.'./categoria.php';
class Prodotti{
    public $categoria;
    public $nome_prodotto;
    public $prezzo;
    public $disponibilita;
    public $img_path;

    function __construct(
        Categoria $_categoria,
        string $_nome_prod,
        float $_prezzo,
        bool $_dispo,
        string $_img)
    {
        $this->categoria = $_categoria;
        $this->nome_prodotto = $_nome_prod;
        $this->prezzo = $_prezzo;
        $this->disponibilita = $_dispo;
        $this->img_path = $_img;
    }
    // public function getCategoria()
    // {
    //     return $this->categoria;
    // }
    // public function getNomeProdotto()
    // {
    //     return $this->nome_prodotto;
    // }
    // public function getPrezzo()
    // {
    //     return $this->prezzo;
    // }
    // public function getDispo()
    // {
    //     return $this->disponibilita;
    // }
    // public function getImgPath()
    // {
    //     return $this->img_path;
    // }
}
?>