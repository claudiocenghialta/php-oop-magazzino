<?php
// Crea e modella classi, a piacere, per gestire i prodotti di un magazzino.

require_once 'classes/Prodotto.php';
require_once 'classes/Televisore.php';

//creo una istanza di un prodotto generico della classe Prodotto
$asseDaStiro = new Prodotto('asse da stiro',112,'varie');
var_dump($asseDaStiro);

//modifico la categoria del prodotto asseDaStiro
$asseDaStiro->setCategoria('casalinghi');

// imposto lo scaffale
$asseDaStiro->setScaffale('132A');

//imposto prezzo
$asseDaStiro->setPrezzo(100);
//imposto aliquota IVA
$asseDaStiro->setAliquotaIVA(22);
//imposto prezzo compresa IVA
$asseDaStiro->setPrezzoFinale();
echo $asseDaStiro->getPrezzoFinale();
var_dump($asseDaStiro);


/* ---------------------- */
// creo una nuova istanza di un televisore (classe che estende la classe prodotti)
$tvSamsung42 = new Televisore('tvSamsung42','TVSAM42','Samsung',42,7);
var_dump($tvSamsung42);
// imposto lo scaffale
$tvSamsung42->setScaffale('TV001');

//imposto prezzo
$tvSamsung42->setPrezzo(1000);
//imposto aliquota IVA
$tvSamsung42->setAliquotaIVA(22);
//imposto prezzo compresa IVA
$tvSamsung42->setPrezzoFinale();
echo $tvSamsung42->getPrezzoFinale();
var_dump($tvSamsung42);