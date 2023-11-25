<?php


namespace App\Services\Structural\Registry;


class ProductPrototype
{
    public $name;
    public $price;

    public function __clone()
    {
        // Perform any necessary deep copy operations
    }
}
