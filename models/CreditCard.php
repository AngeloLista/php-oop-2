<?php 

class CreditCard {
    public $card_number;
    public $holder;
    public $expire_date;
    public $issuing_company;
    public $balance;

    public function __construct($card_number, $holder, $expire_date, $issuing_company, $balance) {
        $this->card_number = $card_number;
        $this->holder = $holder;
        $this->expire_date = $expire_date;
        $this->issuing_company = $issuing_company;
        $this->balance = $balance;
    }

    public function isExpired() {
        $expire_date = strtotime($this->expire_date);
        $today_date = strtotime(date('d-m-Y'));
        
        return $expire_date < $today_date;
    }

    /**
     * Get the value of balance
     */ 
    public function getBalance()
    {
        return $this->balance;
    }

    /**
     * Set the value of balance
     *
     * @return  self
     */ 
    public function setBalance($balance)
    {
        $this->balance = $balance;

        return $this;
    }

    /**
     * Get the value of card_number
     */ 
    public function getCardNumber()
    {
        return $this->card_number;
    }

    /**
     * Set the value of card_number
     *
     * @return  self
     */ 
    public function setCardNumber($card_number)
    {
        $this->card_number = $card_number;

        return $this;
    }

    /**
     * Get the value of expire_date
     */ 
    public function getExpireDate()
    {
        return $this->expire_date;
    }

    /**
     * Set the value of expire_date
     *
     * @return  self
     */ 
    public function setExpireDate($expire_date)
    {
        $this->expire_date = $expire_date;

        return $this;
    }

    /**
     * Get the value of holder
     */ 
    public function getHolder()
    {
        return $this->holder;
    }
}

?>