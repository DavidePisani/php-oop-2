<?php

require_once __DIR__ . '/ProdottoAnimali.php';

class Cibo extends ProdottoAnimali {

    public $tipoAnimale;

    //override
    public function __construct($_tipo, $_marca, $_prezzo, $_tipoAnimale) {
        $this->tipo = $_tipo;
        $this->marca = $_marca;
        $this->prezzo = $_prezzo;
        $this->tipoAnimale = $_tipoAnimale;
    }
}

?>