<?php 

require_once __DIR__ . '/models/CreditCard.php';
require_once __DIR__ . '/models/Customer.php';
require_once __DIR__ . '/models/Product.php';

$credit_card = new CreditCard('3777-3973-9739-3337', 'Mario Rossi', '22-05-2025', 'VISA', 300);

$customer = new Customer('Mario', 'Rossi', '33',  $credit_card, true, '','mariorossi@email.com', '3383919911');

$product = new Product(1, 'Lettiera', 15);

// var_dump($customer);
// var_dump($product);
// var_dump($credit_card);
// var_dump($credit_card->isExpired());

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pet Shop</title>
</head>
<body>
    <main>
        <div>
            <h1>Prima dell'acquisto</h1>
            <ul>
                <li><strong>Intestatario Carta:</strong> <?= $credit_card->getHolder() ?></li>
                <li><strong>Numero Carta:</strong> <?= $credit_card->getCardNumber() ?></li>
                <li><strong>Scadenza:</strong> <?= $credit_card->getExpireDate() ?></li>
                <li><strong>Saldo:</strong> <?= $credit_card->getBalance() ?> €</li>
                
            </ul>
        </div>
        <div>
            <h2>Dopo l'acquisto</h2>
            <ul>
                <li><strong>Intestatario Carta:</strong> <?= $credit_card->getHolder() ?></li>
                <li><strong>Numero Carta:</strong> <?= $credit_card->getCardNumber() ?></li>
                <li><strong>Scadenza:</strong> <?= $credit_card->getExpireDate() ?></li>
                <li><strong>Saldo:</strong> <?= $credit_card->getBalance() ?> €</li>
                <li><strong>Prodotto Acquistato:</strong> <?= $product->getName() ?></li>
                <li>
                    <strong>
                        <?php
                            if ($customer->discount > 0) {
                                echo 'Hai diritto ad uno sconto del ' . $customer->discount * 100 . '%';
                            } else {
                                echo 'Registrati per avere uno sconto';
                            }
                            ?>
                    </strong>
                </li>
                <li><strong>Prezzo Prodotto:</strong> <?= $customer->getDiscountedPrice($product) ?> €</li>
                <li><strong>Esito Acquisto:</strong> <?= $customer->buy($product) ?></li>
            </ul>
        </div>
    </main>
    
</body>
</html>