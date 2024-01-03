<?php


namespace App\Services\Structural\Decorator;


class SugarDecorator extends CoffeeDecorator
{
    public function cost()
    {
        return parent::cost() + 2; // Additional cost for sugar
    }
}
