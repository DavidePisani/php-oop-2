<?php

class Utente {
    public $nome;

    public $email;

    public $sconto = 0;

    protected $prodottiNelCarrello = [];

    public function __construct($_nome, $_email) {
        $this->nome = $_nome;
        $this->email = $_email;
    }

    public function setPordottoCarrello($prodotto) {
        $this->prodottiNelCarrello[] = $prodotto;
    }

    public function getPordottoCarrello() {
        return $this->prodottiNelCarrello;
    } 
    
    public function prezzoCarrello(){
        $totaleCarrello = 0;
        foreach($this->prodottiNelCarrello as $prodotto) {
            $totaleCarrello += $prodotto->prezzo;
        }
        $totaleCarrello -= $totaleCarrello * $this->sconto / 100;

        return $totaleCarrello;
    }
}

?>