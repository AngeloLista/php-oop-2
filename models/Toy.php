<?php 

require_once __DIR__ . '/models/Product.php'

class Toys extends Product
{
    public $type_of_toy;

    public function __construct($id, $name, $price) {
        parent::__construct($id, $name, $price);
        $this->setType_of_toy($type_of_toy);
    }
    

    public function getType_of_toy()
    {
        return $this->type_of_toy;
    }
   
    public function setType_of_toy($type_of_toy)
    {
        $this->type_of_toy = $type_of_toy;

        return $this;
    }
}


?>