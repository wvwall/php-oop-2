<?php
    require_once "./user.php";
    require_once "./products.php";

    

    try {
        $user = new User("Walter Velardo","wvwall","1234","Premium","1234567891","01-01-2022","123");
       }catch(Exception $e) {
           
           echo "Errore:" . $e->getMessage();
       }
    var_dump($user);