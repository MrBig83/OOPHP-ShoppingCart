<?php


class CartItem
{
    public function __construct($product, $quantity){
        $this->product = $product;
        $this->quantity = $quantity;
    }

    private $product;
    private $quantity;

    // TODO Skriv en konstruktor som sätter alla properties == DONE

    // TODO Skriv getters för alla properties == DONE

    public function getProduct(){
        return $this->product;
    }
    public function getQuantity(){
        return $this->quantity;
    }

    //VG: Skall utöka antalet på ett cartItem med 1. 
    //VG: Det skall inte vara möjligt att utöka så att antalet överstiger produktens $inStock.
    public function increaseQuantity()
    {
        
        if($this -> quantity < $this -> product -> getInStock()){
            $this -> quantity += 1;
        }
    }
}
