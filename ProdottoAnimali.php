<?php
require_once __DIR__ . '/CodiciProdotti.php';
class ProdottoAnimali {
    public $tipo;

    public $marca;

    public $prezzo;

   
    public function __construct($_tipo, $_marca, $_prezzo) {
        $this->tipo = $_tipo;
        $this->marca = $_marca;
        $this->prezzo = $_prezzo;
    }
}

?>