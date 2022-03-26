<?php 

require_once __DIR__ . '/models/Customer.php';

$customer = new Customer('Mario', 'Rossi', '33', 'mariorossi@email.com', 'obj', true, '3383919911');

var_dump($customer)

?>