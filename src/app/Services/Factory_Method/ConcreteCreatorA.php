<?php


namespace App\Services\Factory_Method;

use App\Contracts\Factory_Method\Creator;
use App\Contracts\Factory_Method\Product;


class ConcreteCreatorA implements Creator
{
    public function createProduct(): Product
    {
        return new ConcreteProductA();
    }
}
