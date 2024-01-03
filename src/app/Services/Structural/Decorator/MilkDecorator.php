<?php


namespace App\Services\Structural\Decorator;


class MilkDecorator extends CoffeeDecorator
{
    public function cost()
    {
        return parent::cost() + 5; // Additional cost for milk
    }
}
