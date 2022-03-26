<?php
require_once __DIR__ . '\Product.php';

class Food extends Product
{
    public $type_of_food;
    public $grams;

    public function __construct($id, $name, $price, $type_of_food, $grams)
    {
        parent::__construct($id, $name, $price);
        $this->setTypeOfFood($type_of_food);  
        $this->setGrams($grams);  
    }

    /**
     * Get the value of type_of_food
     */ 
    public function getTypeOfFood()
    {
        return $this->type_of_food;
    }

    /**
     * Set the value of type_of_food
     *
     * @return  self
     */ 
    public function setTypeOfFood($type_of_food)
    {
        $this->type_of_food = $type_of_food;

        return $this;
    }

    /**
     * Get the value of grams
     */ 
    public function getGrams()
    {
        return $this->grams;
    }

    /**
     * Set the value of grams
     *
     * @return  self
     */ 
    public function setGrams($grams)
    {
        $this->grams = $grams;

        return $this;
    }
}
