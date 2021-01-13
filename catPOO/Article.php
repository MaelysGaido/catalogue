<?php

class Article {
    //attributs
        private $id;
        private $name;
        private $decription;
        private $price;
        private $picture;
        private $weigth;
        private $quantity;
        private $available;

    //paramètres
    public function  __construct($id,$name,$description,$price,$picture,$weigth,$quantity,$available) {
            $this->id = $id;
            $this->name = $name;
            $this->description = $description;
            $this->price = $price;
            $this->picture = $picture;
            $this->weigth = $weigth;
            $this->quantity = $quantity;
            $this->available = $available;
    }

    public function getId(){
        return $this->id;
    }

    public function getName(){
        return $this->name;
    }

    public function getDescription(){
        return $this->description;
    }

    public function getPrice(){
        return $this->price;
    }

    public function getPicture(){
        return $this->picture;
    }

    public function getWeigth(){
        return $this->weigth;
    }

    public function getQuantity(){
        return $this->quantity;
    }

    public function getAvailable(){
        return $this->available;
    }
    
}

   

?>