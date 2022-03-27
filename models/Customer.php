<?php

require_once __DIR__ . '/CreditCard.php';

class Customer {
    
    public $first_name;
    public $last_name;
    public $age;
    public $credit_card;
    public $is_registered;
    public $discount;
    public $email;
    public $phone;


    public function __construct($first_name, $last_name, $age, $credit_card, $is_registered, $discount, $email = null, $phone = null) {
        $this->first_name = $first_name;
        $this->last_name = $last_name;
        $this->age = $age;
        $this->credit_card = $credit_card;
        $this->is_registered = $is_registered;
        $this->setDiscount($discount);
        $this->email = $email;
        $this->phone = $phone;
    }

    // Se l'utente è registrato discount del 20%
    public function setDiscount() {
        return $this->is_registered ? $this->discount = 0.20 : $this->discount = 0;
    }


    /**
     * Get the value of credit_card
     */ 
    public function getCreditCard()
    {
        return $this->credit_card;
    }

    /**
     * Set the value of credit_card
     *
     * @return  self
     */ 
    public function setCreditCard($credit_card)
    {
        if($credit_card instanceof CreditCard === false) return false;
        $this->credit_card = $credit_card;

        return $this;
    }
}
?>