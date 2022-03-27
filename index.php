<?php 

require_once __DIR__ . '/models/CreditCard.php';
require_once __DIR__ . '/models/Customer.php';
require_once __DIR__ . '/models/Food.php';
require_once __DIR__ . '/models/Product.php';
require_once __DIR__ . '/models/Toy.php';

$credit_card = new CreditCard('3777-3973-9739-3337', 'Mario Rossi', '22-05-2025', 'VISA', 300);
$customer = new Customer('Mario', 'Rossi', '33',  $credit_card, true, '','mariorossi@email.com', '3383919911');
$product = new Product(1, 'prodotto', 3.33);

var_dump($customer);
// var_dump($product);
// var_dump($credit_card);
var_dump($credit_card->isExpired());
var_dump($customer->buy());

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
    <header>

    </header>

    <main>

    </main>
    
</body>
</html>