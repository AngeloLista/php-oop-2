<?php 

class CreditCard {
    public $card_number;
    public $holder;
    public $expire_date;
    public $issuing_company;

    public function __construct($card_number, $holder, $expire_date, $issuing_company) {
        $this->card_number = $card_number;
        $this->holder = $holder;
        $this->expire_date = $expire_date;
        $this->issuing_company = $issuing_company;
    }

    public function isExpired() {
        $expire_date = strtotime($this->expire_date);
        $today_date = strtotime(date('d-m-Y'));
        
        return $expire_date < $today_date;
    }
}

?>