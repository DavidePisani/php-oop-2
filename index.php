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
require_once __DIR__ . '/CartaUtente.php';


$croccantini = new Cibo('Croccantini', 'Oasy', 15, 'Gatto');
$croccantini->codiceProdotto = 'Osy337';
var_dump($croccantini);

$seresto = new Antiparassitari('Collarino Antiparassitario', 'Elanco', 35, 'Cane');
$seresto->codiceProdotto = 'Sr034';
var_dump($seresto);

$cuccia = new Accessori('Cuccia', 'Camon', 27);
var_dump($cuccia);

$davide_pisani = new UtenteNonRegistrato('Davide Pisani', 'davide.pisani@mail.it');
$davide_pisani->setPordottoCarrello($croccantini);
$davide_pisani->setPordottoCarrello($seresto);
$davide_pisani->prezzoCarrello();

$cartaUtente = new CartaUtente('Davide Pisani', '5987648523649855', '03/25', '598');
$cartaUtente->saldo = 3500;



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
            <div> Prezzo: <?php echo $prodotti-> prezzo?> Euro</div>
            <div> Per: <?php echo $prodotti -> tipoAnimale  ?></div>
        <?php }?> 
        <h2> Totale Carrello: <?php echo $davide_pisani->prezzoCarrello()?> Euro</h2>

        <?php
            try {
                if($davide_pisani->effettuaPagamento($cartaUtente) === 'eseguito') {
                    echo "<h2>Pagamento andato a buon fine, Arrivederci</h2>";
                }
            } catch(Exception $message) {
               
                error_log($message->getMessage());
            
                echo "<h3>Pagamento rifiutato, controllare saldo e riprovare, Grazie =)</h3>";
            }
        ?>
           
            
    </div>
</body>
</html>



