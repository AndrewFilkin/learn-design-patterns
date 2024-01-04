<?php


namespace App\Services\Behavioral\Strategy;


class BitcoinPayment implements \App\Contracts\Behavioral\Strategy\PaymentStrategy
{
    private $bitcoinAddress;

    public function __construct($bitcoinAddress) {
        $this->bitcoinAddress = $bitcoinAddress;
    }

    public function pay($amount) {
        echo "Paid $amount via Bitcoin. " . '</br>';
        // Additional logic for Bitcoin payment
    }
}
