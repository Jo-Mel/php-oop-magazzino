<?php
require_once 'Prodotto.php';

class NewCollection extends HandBags {
  public $collezione;

  public function __construct($_codiceArticolo, $_marca, $_modello, $_collezione = 'nuova collezione') {
    parent::__construct($_codiceArticolo, $_marca, $_modello);
    $this->collezione = $_collezione;
  }
}