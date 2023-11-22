<?php


namespace App\Services\Factory_Method;

use App\Contracts\Factory_Method\Creator;

class Run
{
    function clientCode(Creator $creator)
    {
        $product = $creator->createProduct();
        echo 'Created ' . $product->getName() . PHP_EOL;
    }
}
