<?php 

require_once __DIR__ . '/models/Customer.php';
require_once __DIR__ . '/models/Product.php';
require_once __DIR__ . '/models/Toy.php';
require_once __DIR__ . '/models/Food.php';

$credit_card = new CreditCard('324234234234', 'Mario Rossi', '29/34/2023', 'VISA');
$customer = new Customer('Mario', 'Rossi', '33', 'mariorossi@email.com', $credit_card, true, '3383919911');
$product = new Product(1, 'prodotto', 3.33);

var_dump($customer);
var_dump($product);
var_dump($credit_card);

?>