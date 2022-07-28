<?php
// L'e-commerce vende prodotti per gli animali.
// I prodotti saranno oltre al cibo, anche giochi, cucce, etc.
// L'utente potrà sia comprare i prodotti senza registrarsi, oppure iscriversi e ricevere il 20% di sconto su tutti i prodotti.
// BONUS:
// Il pagamento avviene con la carta prepagata che deve contenere un saldo sufficiente all'acquisto. 

require_once __DIR__ . '/Cibo.php';
require_once __DIR__ . '/Antiparassitari.php';
require_once __DIR__ . '/Accessori.php';
require_once __DIR__ . '/UtenteNonRegistrato.php';
require_once __DIR__ . '/UtenteRegistrato.php';



$croccantini = new Cibo('Croccantini', 'Oasy', 15, 'Gatto');
var_dump($croccantini);

$seresto = new Antiparassitari('Collarino', 'Elanco', 35, 'Cane');
var_dump($seresto);

$cuccia = new Accessori('Cuccia', 'Camon', 27);
var_dump($cuccia);

$davide_pisani = new UtenteNonRegistrato('Davide Pisani', 'davide.pisani@mail.it');
$davide_pisani->setPordottoCarrello($croccantini);
$davide_pisani->prezzoCarrello();
var_dump($davide_pisani);
var_dump($davide_pisani->prezzoCarrello());
?>



