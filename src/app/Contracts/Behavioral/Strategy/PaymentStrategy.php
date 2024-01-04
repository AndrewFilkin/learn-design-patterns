<?php


namespace App\Contracts\Behavioral\Strategy;


interface PaymentStrategy
{
    public function pay($amount);
}
