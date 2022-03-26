<?php 

require_once __DIR__ . '/models/Customer.php';
require_once __DIR__ . '/models/Product.php';
require_once __DIR__ . '/models/Toy.php';
require_once __DIR__ . '/models/Food.php';

$customer = new Customer('Mario', 'Rossi', '33', 'mariorossi@email.com', 'obj', true, '3383919911');

$product = new Product(1, 'prodotto', 3.33);

var_dump($customer);
var_dump($product);

?>