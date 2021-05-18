<?php

class Product {

    private $name;
    private $gender;
    private $category;
    private $brand;
    private $price;

    public function __construct($name, $gender, $category, $brand, $price) {
        
        $this->name = $name;
        $this->gender = $gender;
        $this->category = $category;
        $this->brand = $brand;
        $this->price = $price;
    }

        //get e set 
    public function getName() {
            return $this->name;
        }
    public function setName($name) {
            $this->name = $name;
        }

        //get e set 
        public function getGender() {
            return $this->gender;
        }
    public function setGender($gender) {
            $this->gender = $gender;
        }


        //get e set 
        public function getCategory($category) {
            return $this->category;
        }

    public function setCategory($category) {
            $this->category = $category;
        }

        //get e set 

        public function getBrand($brand) {
            return $this->brand;
        }

    public function setBrand($brand) {
            $this->brand = $brand;
        }

        
        //get e set
        public function getPrice() {
            return $this->price;
        }
    public function setPrice($price) {
            $this->price = $price;
        }

}