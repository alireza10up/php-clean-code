<?php

interface Basket
{
    public function add();
    public function remove();
    public function totalAmount();
    public function all();
}

class SessionBasket implements Basket
{
    public function add()
    {
    }
    public function remove()
    {
    }
    public function totalAmount()
    {
        echo "Your Total Amount : " .  rand(100, 99999) . PHP_EOL;
    }
    public function all()
    {
    }
}

class DatabaseBasket implements Basket
{
    public function add()
    {
    }
    public function remove()
    {
    }
    public function totalAmount()
    {
        echo "Your Total Amount : " .  rand(100, 99999) . PHP_EOL;
    }
    public function all()
    {
    }
}

class Payment
{
    private Basket $basket;
    
    public function __construct(Basket $basket)
    {
        $this->basket = $basket;
    }
    
    public function make()
    {
        echo $this->basket->totalAmount();
    }
}

class Order
{
    private Basket $basket;
    
    public function __construct(Basket $basket)
    {
        $this->basket = $basket;
    }
    
    public function make()
    {
        echo $this->basket->totalAmount();
    }
}

# Should Be Implement It
# IOC Container => Inversion Of Control Container

$basket = new DatabaseBasket();

(new Payment($basket))->make();
(new Order($basket))->make();
