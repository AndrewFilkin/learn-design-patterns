<?php


namespace App\Services\Factory_Method;

use App\Contracts\Factory_Method\Product;


class ConcreteProductB implements Product
{

    public function getName(): string
    {
        return 'Product B';
    }
}
