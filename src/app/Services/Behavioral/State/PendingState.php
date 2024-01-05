<?php


namespace App\Services\Behavioral\State;

use App\Services\Behavioral\State\ShippedState;


class PendingState implements \App\Contracts\Behavioral\State\State
{
    public function processOrder(Order $order)
    {
        echo "Order is pending processing." . '</br>';
        // Additional logic for pending state
        // Transition to the next state if needed
        $order->setState(new ShippedState());
    }
}
