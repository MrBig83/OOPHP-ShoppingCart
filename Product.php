<?php

class Product
{

    public function __construct($id, $title, $price, $inStock){
        $this->id = $id;
        $this->title = $title;
        $this->price = $price;
        $this->inStock = $inStock;
    }

    private $id;
    private $title;
    private $price;
    private $inStock;

    // TODO Skriv en konstruktor som sätter alla properties

    // TODO Skriv getters för alla properties

    public function getId(){
        return $this->id;
    }
    public function getTitle(){
        return $this->title;
    }
    public function getPrice(){
        return $this->price;
    }
    public function getInStock(){
        return $this->inStock;
    }

}
