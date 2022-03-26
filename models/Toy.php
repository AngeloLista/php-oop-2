<?php
require_once __DIR__ . '\Product.php';

class Toy extends Product
{
    public $type_of_toy;

    public function __construct($id, $name, $price, $type_of_toy)
    {
        parent::__construct($id, $name, $price);
        $this->setTypeOfToy($type_of_toy);  
    }

    /**
     * Get the value of type_of_toy
     */ 
    public function getTypeOfToy()
    {
        return $this->type_of_toy;
    }

    /**
     * Set the value of type_of_toy
     *
     * @return  self
     */ 
    public function setTypeOfToy($type_of_toy)
    {
        $this->type_of_toy = $type_of_toy;

        return $this;
    }
}
