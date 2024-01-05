<?php


namespace App\Services\Behavioral\State;


use App\Contracts\Behavioral\State\State;

class Order
{
    private $state;

    public function __construct(State $state)
    {
        $this->setState($state);
    }

    public function setState(State $state)
    {
        $this->state = $state;
    }

    public function processOrder()
    {
        $this->state->processOrder($this);
    }
}
