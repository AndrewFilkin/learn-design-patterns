<?php


namespace App\Services\Structural\Decorator;

use App\Contracts\Structural\Coffee;

abstract class CoffeeDecorator implements \App\Contracts\Structural\Coffee
{

    protected $coffee;

    public function __construct(Coffee $coffee)
    {
        $this->coffee = $coffee;
    }

    public function cost()
    {
        return $this->coffee->cost();
    }
}
