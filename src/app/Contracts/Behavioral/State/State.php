<?php


namespace App\Contracts\Behavioral\State;


use App\Services\Behavioral\State\Order;

interface State
{
    public function processOrder(Order $order);
}
