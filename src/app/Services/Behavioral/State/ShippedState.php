<?php


namespace App\Services\Behavioral\State;


class ShippedState implements \App\Contracts\Behavioral\State\State
{

    public function processOrder(Order $order)
    {
        echo "Order is shipped." . '</br>';
        // Additional logic for shipped state
        // Transition to the next state if needed
        $order->setState(new DeliveredState());
    }
}
