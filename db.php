<?php

class Prodotti {
    private $titolo;
    private $prezzo;
    private $categoria;
    private $immagine;

    public function __construct($titolo, $prezzo, Categoria $categoria, $immagine ) {
        $this -> setTitolo($titolo);
        $this -> setPrezzo($prezzo);
        $this -> setCategoria($categoria);
        $this -> setImmagine($immagine);
    }


    public function getTitolo() {
        return $this -> titolo;
    }

    public function setTitolo($titolo) {
        $this -> titolo = $titolo;
    }

    public function getPrezzo() {
        return $this -> prezzo;
    }

    public function setPrezzo($prezzo) {
        $this -> prezzo = $prezzo;
    }

    public function getCategoria() {
        return $this -> categoria;
    }

    public function setCategoria($categoria) {
        $this -> categoria = $categoria;
    }

    public function getImmagine() {
        return $this -> immagine;
    }

    public function setImmagine($immagine) {
        $this -> immagine = $immagine;
    }
}

// categoria: cani/gatti
class Categoria {
    private $nome;
    private $icona;

    public function __construct($nome, $icona) {
        $this -> setNome($nome);
        $this -> setIcona($icona);
    }

    public function getNome() {
        return $this -> nome;
    }

    public function setNome($nome) {
        $this -> nome = $nome;
    }

    public function getIcona() {
        return $this -> icona;
    }

    public function setIcona($icona) {
        $this -> icona = $icona;
    }
}

$cane = new Categoria('cane' , '🐶');
$gatto = new Categoria('gatto' , '😼');


// echo $gatto->getIcona();
// echo $gatto->getNome();

//es accessori, cibo, cucce, giochi ecc..
class TipoProdotto extends Prodotti {
    private $tipologia;

    public function __construct($titolo, $prezzo, $immagine, $tipologia, Categoria $categoria) {
        $this -> setTitolo($titolo);
        $this -> setPrezzo($prezzo);
        $this -> setImmagine($immagine);
        $this -> setTipologia($tipologia);
        $this -> setCategoria($categoria);
    }

    public function getTipologia() {
        return $this->tipologia;
    }

    public function setTipologia($tipologia) {
        $this->tipologia = $tipologia;
    }

}

$prodotto1 = new TipoProdotto('Collarino', 25, 'img1', 'Accessorio', $cane);
$prodotto2 = new TipoProdotto('Scatoletta manzo', 10, 'img2', 'Cibo', $gatto);

echo $prodotto1 -> getTipologia();

echo '<br>';
echo '<br>';

echo $prodotto1 -> getCategoria() -> getNome();

echo '<br>';
echo '<br>';

echo 'ciaoo';