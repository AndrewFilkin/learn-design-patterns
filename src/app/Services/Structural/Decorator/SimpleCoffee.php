<?php


namespace App\Services\Structural\Decorator;


class SimpleCoffee implements \App\Contracts\Structural\Coffee
{

    public function cost()
    {
        return 10; // Base cost of simple coffee
    }
}
