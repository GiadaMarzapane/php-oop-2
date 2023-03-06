<?php
class Prodotti{
    protected $macrogruppo;
    protected $categoria;
    protected $icona_categ;
    protected $nome_prodotto;
    protected $prezzo;
    protected $disponibilita;
    protected $img_path;

    function __construct(string $_macrogruppo, string $_categoria, string $_nome_prod, float $_prezzo, bool $_dispo, string $_img)
    {
        $this->macrogruppo = $_macrogruppo;
        $this->categoria = $_categoria;
        $this->nome_prodotto = $_nome_prod;
        $this->prezzo = $_prezzo;
        $this->disponibilita = $_dispo;
        $this->img_path = $_img;
    }

    public function getMacrogrupppo()
    {
        return $this->macrogruppo;
    }
    public function getCategoria()
    {
        return $this->categoria;
    }
    public function getIcona()
    {
        return $this->icona_categ;
    }
    public function getNomeProdotto()
    {
        return $this->nome_prodotto;
    }
    public function getPrezzo()
    {
        return $this->prezzo;
    }
    public function getDispo()
    {
        return $this->disponibilita;
    }
    public function getImgPath()
    {
        return $this->img_path;
    }
}
?>