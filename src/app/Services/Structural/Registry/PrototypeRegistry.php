<?php


namespace App\Services\Structural\Registry;

use Illuminate\Testing\Exceptions\InvalidArgumentException;

class PrototypeRegistry
{
    private $prototypes = [];

    public function registerPrototype($name, $prototype)
    {
        $this->prototypes[$name] = $prototype;
    }

    public function createInstance($name)
    {
        if (isset($this->prototypes[$name])) {
            return clone $this->prototypes[$name];
        } else {
            throw new InvalidArgumentException("Prototype with name $name not found.");
        }
    }
}
