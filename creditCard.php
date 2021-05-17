<?php 

trait CreditCard {

    private $cardNumber;
    private $expiration_date;
    private $cvc;

   
    //get e set 
    public function getCardNumber()
    {
        return $this->cardNumber;
    }
    public function setCardNumber($cardNumber)
    {
        $this->cardNumber = $cardNumber;
    }

    //get e set 
    public function getExpirationDate()
    {
        return $this->expiration_number;
    }

    public function setExpirationDate($expiration_date)
    {
        $this->expiration_date = $expiration_date;
    }

    //get e set 
    public function getCVC()
    {
        return $this->cvc;
    }
   
    public function setCvc($cvc)
    {
        $this->cvc = $cvc;
    }

   
}
