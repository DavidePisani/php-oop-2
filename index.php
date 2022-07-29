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
// var_dump($croccantini);

$seresto = new Antiparassitari('Collarino Antiparassitario', 'Elanco', 35, 'Cane');
// var_dump($seresto);

$cuccia = new Accessori('Cuccia', 'Camon', 27);
// var_dump($cuccia);

$davide_pisani = new UtenteRegistrato('Davide Pisani', 'davide.pisani@mail.it');
$davide_pisani->setPordottoCarrello($croccantini);
$davide_pisani->setPordottoCarrello($seresto);
$davide_pisani->prezzoCarrello();
// var_dump($davide_pisani);
// var_dump($davide_pisani->prezzoCarrello());
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LittleZoo</title>
</head>
<body>
    <div>
        <h1>Prodotti nel carrello</h1>
         <?php foreach ($davide_pisani->getPordottoCarrello() as $prodotti) {  ?>
            <div> Tipo: <?php echo $prodotti-> tipo  ?></div>
            <div> Marca: <?php echo $prodotti-> marca  ?></div>
            <div> Prezzo: <?php echo $prodotti-> prezzo?>Euro</div>
            <div> Per: <?php echo $prodotti -> tipoAnimale  ?></div>
        <?php }?> 
        <h2> Totale Carrello: <?php echo $davide_pisani->prezzoCarrello()?></h2>
           
            
    </div>
</body>
</html>



