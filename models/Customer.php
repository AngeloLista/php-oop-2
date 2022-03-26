<?php 

class Customer {
    
    public $first_name;
    public $last_name;
    public $age;
    public $credit_card;
    public $is_registered;
    public $discount;
    public $email;
    public $phone;


    public function __construct($first_name, $last_name, $age, $credit_card, $is_registered, $discount,$email = null, $phone = null) {
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

}
?>