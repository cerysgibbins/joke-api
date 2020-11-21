<?php 

class Joke 
{
    private $setup;
    private $delivery;

    public function __construct($setup, $delivery)
    {
        $this->setup = $setup;
        $this->delivery = $delivery;
    }

    public function getSetup()
    {
        return $this->setup;
    }

    public function getDelivery()
    {
        return $this->delivery;
    }
}