<?php


namespace App\Services\Structural\Adapter;

use App\Contracts\Structural\Adapter\NewSystemInterface;

class SomeNewSystem
{

    private $newSystem;

    public function __construct(NewSystemInterface $newSystem)
    {
        $this->newSystem = $newSystem;
    }

    public function makeRequest()
    {
        return $this->newSystem->newRequest();
    }
}
