<?php


namespace App\Services\Structural\Adapter;


class OldSystemAdapter implements \App\Contracts\Structural\Adapter\NewSystemInterface
{

    private $oldSystem;

    public function __construct(OldSystem $oldSystem)
    {
        $this->oldSystem = $oldSystem;
    }

    public function newRequest()
    {
        // Use the old system's method to adapt to the new system
        return $this->oldSystem->oldRequest();
    }
}
