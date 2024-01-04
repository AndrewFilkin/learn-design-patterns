<?php

namespace App\Http\Controllers;

use App\Services\Behavioral\Strategy\BitcoinPayment;
use App\Services\Behavioral\Strategy\CreditCardPayment;
use App\Services\Behavioral\Strategy\PayPalPayment;
use App\Services\Behavioral\Strategy\ShoppingCart;
use Illuminate\Http\Request;

class TestBehavioralPatternController extends Controller
{
    public function strategy()
    {
        $cart = new ShoppingCart();

// Use Credit Card payment strategy
        $creditCardPayment = new CreditCardPayment("1234-5678-9012-3456", "12/23");
        $cart->setPaymentStrategy($creditCardPayment);
        $cart->checkout(100);

// Use PayPal payment strategy
        $paypalPayment = new PayPalPayment("example@example.com");
        $cart->setPaymentStrategy($paypalPayment);
        $cart->checkout(50);

// Use Bitcoin payment strategy
        $bitcoinPayment = new BitcoinPayment("1A1zP1eP5QGefi2DMPTfTL5SLmv7DivfNa");
        $cart->setPaymentStrategy($bitcoinPayment);
        $cart->checkout(200);
    }
}
