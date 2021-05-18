<?php

    require_once "./creditCard.php";

    class User {

     use CreditCard;
    
      private $completeName;
      private $username;
      private $password;
      private $account_status= null;
     

      public function __construct ($completeName,$username,$password,$account_status,$cardNumber,$expiration_date,$cvc) {

        if($expiration_date < "01-01-2021") {
            throw new \Exception("Carta scaduta");
        }
          $this->completeName = $completeName;
          $this->username = $username;
          $this->password = $password;
          $this->account_status = $account_status;

          $this->setCardNumber($cardNumber);
          $this->setExpirationDate($expiration_date);
          $this->setCvc($cvc);
      }

        //get e set 
        public function getCompleteName() {
            return $this->completeName;
        }
        
        public function setCompleteName($completeName) {
            $this->completeName = $completeName;
        }

        //get e set 
        public function getUsername() {
            return $this->username;
        }
        
        public function setUsername($username) {
            $this->username = $username;
        }

        //get e set 
        public function getPassword() {
            return $this->password;
        }
        
        public function setPassword($password) {
            $this->password = $password;
        }

        //get e set 
        public function getAccountStatus() {
            return $this->account_status;
        }

        public function setAccountStatus($account_status) {
            $this->account_status = $account_status;
        }
 
}