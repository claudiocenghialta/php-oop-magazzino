<?php
require_once 'Prodotto.php';

//aggiungo raee al prezzo
class Televisore extends Prodotto {
    public $marca;
    public $pollici;
    public $importoRaee;

    public function __construct($_nomeProdotto, $_codiceProdotto, $_marca, $_pollici, $_importoRaee) {
        
        parent::__construct($_nomeProdotto, $_codiceProdotto, 'Televisori');
        $this->marca = $_marca;
        $this->pollici = $_pollici;
        $this->importoRaee = $_importoRaee;
        

    }

    //set prezzo IVA inclusa + RAEE
    public function setPrezzoFinale(){
        $this->prezzoFinale = $this->prezzo *(1+$this->aliquotaIVA/100)+$this->importoRaee;
    }
    //get prezzo IVA inclusa + RAEE
    public function getPrezzoFinale(){
        return $this->prezzoFinale;
    }
    
    
}