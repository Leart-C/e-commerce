<?php

class Product{
    private $id;
    private $name;
    private $brand;
    private $price;
    private $user_id;


    function __construct($id,$name,$brand,$price,$user_id){
        $this->id = $id;
        $this->name = $name;
        $this->brand = $brand;
        $this->price = $price;
        $this->user_id = $user_id;
    }

    function getId(){
        return $this->id;
    }
    function getName(){
        return $this->name;
    }

    function getBrand(){
        return $this->brand;
    }

    function getPrice (){ 
        return $this->price;
    }

    function getUserId(){  
        return $this->user_id;
    }
     
}
?>