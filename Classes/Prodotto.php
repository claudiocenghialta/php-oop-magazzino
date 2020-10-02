<?php
class Prodotto{
    public $nomeProdotto;
    public $codiceProdotto;
    public $categoria;
    public $prezzo;
    public $aliquotaIVA;
    public $prezzoFinale;
    public $scaffale;


    public function __construct($_nomeProdotto, $_codiceProdotto, $_categoria){
        $this->nomeProdotto = $_nomeProdotto;
        $this->codiceProdotto = $_codiceProdotto;
        $this->categoria = $_categoria;
    }
    
    
    // set categoria
    public function setCategoria($_categoria){
        $this->categoria = $_categoria;
    }
    // set scaffale
    public function setScaffale($_scaffale){
        $this->scaffale = $_scaffale;
    }
    // set prezzo
    public function setPrezzo($_prezzo){
        $this->prezzo = $_prezzo;
    }// set aliquotaIva
    public function setAliquotaIVA($_aliquotaIVA){
        $this->aliquotaIVA = $_aliquotaIVA;
    }
    //set prezzo IVA inclusa
    public function setPrezzoFinale(){
        $this->prezzoFinale = $this->prezzo *(1+$this->aliquotaIVA/100);
    }
    //get prezzo IVA inclusa
    public function getPrezzoFinale(){
        return $this->prezzoFinale;
    }
}
