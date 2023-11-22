<?php


namespace app\Services\Factory_Method;

use App\Contracts\Factory_Method\Creator;
use App\Contracts\Factory_Method\Product;


class ConcreteCreatorB implements Creator
{

    public function createProduct(): Product
    {
        return new ConcreteProductB();
    }
}
