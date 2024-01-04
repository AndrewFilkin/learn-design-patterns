<?php


namespace App\Services\Behavioral\Strategy;


class PayPalPayment implements \App\Contracts\Behavioral\Strategy\PaymentStrategy
{
    private $email;

    public function __construct($email) {
        $this->email = $email;
    }

    public function pay($amount) {
        echo "Paid $amount via PayPal. " . '</br>';
        // Additional logic for PayPal payment
    }
}
