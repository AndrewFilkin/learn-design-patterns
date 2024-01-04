<?php


namespace App\Services\Behavioral\Strategy;


class CreditCardPayment implements \App\Contracts\Behavioral\Strategy\PaymentStrategy
{
    private $cardNumber;
    private $expiryDate;

    public function __construct($cardNumber, $expiryDate) {
        $this->cardNumber = $cardNumber;
        $this->expiryDate = $expiryDate;
    }

    public function pay($amount) {
        echo "Paid $amount via Credit Card. " . '</br>';
        // Additional logic for Credit Card payment
    }
}
