<?php


namespace App\Services\Prototype;

use App\Contracts\Prototype\Prototype;


class ConcretePrototype implements Prototype
{

    private $property;

    public function __construct($property)
    {
        $this->property = $property;
    }

    // Clone method to create a copy of the object
    public function clone(): Prototype
    {
        // Use the clone keyword to create a shallow copy
        return clone $this;
    }

    public function getProperty()
    {
        return $this->property;
    }

    public function setProperty($property)
    {
        $this->property = $property;
    }
}
