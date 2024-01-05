<?php


namespace App\Services\Behavioral\State;


class DeliveredState implements \App\Contracts\Behavioral\State\State
{

    public function processOrder(Order $order)
    {
        echo "Order is delivered." . '</br>';
        // Additional logic for delivered state
        // No transition in this case
    }
}
