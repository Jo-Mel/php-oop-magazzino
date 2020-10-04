<?php
  class HandBags {
    public $codiceArticolo;
    public $marca;
    public $modello;
    public $prezzo;

    public function __construct($_codiceArticolo, $_marca, $_modello) {
      $this->codiceArticolo = $_codiceArticolo;
      $this->marca = $_marca;
      $this->modello = $_modello;
    }

    public function calcolaSconto() {
      if (empty($this->prezzo)) {
        die('non hai inserto il prezzo');
      }
      return $this->prezzo - ($this->prezzo * 0.20) . ' euro';
    }
  }