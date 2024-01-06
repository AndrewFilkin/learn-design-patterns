<?php

namespace App\Http\Controllers;

use App\Services\Behavioral\Command\Light;
use App\Services\Behavioral\Command\LightOnCommand;
use App\Services\Behavioral\Command\RemoteControl;
use App\Services\Behavioral\Mediator\ChatMediator;
use App\Services\Behavioral\Mediator\User;
use App\Services\Behavioral\Memento\Editor;
use App\Services\Behavioral\Memento\History;
use App\Services\Behavioral\Observer\NewsAgency;
use App\Services\Behavioral\Observer\NewsReader;
use App\Services\Behavioral\State\Order;
use App\Services\Behavioral\State\PendingState;
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

    public function command()
    {
        $light = new Light();
        $lightOnCommand = new LightOnCommand($light);

        $remote = new RemoteControl();
        $remote->setCommand($lightOnCommand);
        $remote->pressButton();
        $remote->pressButtonLightOff(); // for test

    }

    public function state()
    {
        $order = new Order(new PendingState());
        $order->processOrder(); // Output: Order is pending processing.
        $order->processOrder(); // Output: Order is shipped.
        $order->processOrder(); // Output: Order is delivered.
    }

    public function iterator()
    {
        // See basic documentation
    }

    public function mediator()
    {
        // Usage
        $chatMediator = new ChatMediator();

        $user1 = new User('User 1');
        $user2 = new User('User 2');
        $user3 = new User('User 3');

        $chatMediator->addColleague($user1);
        $chatMediator->addColleague($user2);
        $chatMediator->addColleague($user3);

        $user1->setMediator($chatMediator);
        $user2->setMediator($chatMediator);
        $user3->setMediator($chatMediator);

        $user1->sendMessage('Hello, everyone!');
        $user2->sendMessage('Hi there!');
        $user3->sendMessage('Hey, how are you?');
    }

    public function memento()
    {
        $editor = new Editor();
        $history = new History();

// Set initial content
        $editor->setContent("First content");
        $history->addMemento($editor->createMemento());

// Update content
        $editor->setContent("Second content");
        $history->addMemento($editor->createMemento());

// Restore to previous state
        $editor->restoreFromMemento($history->getMemento(0));

        echo "Current content: " . $editor->getContent(); // Output: Current content: First content
    }

    public function observer()
    {
        $newsAgency = new NewsAgency();

        $reader1 = new NewsReader("Reader 1");
        $reader2 = new NewsReader("Reader 2");

        $newsAgency->addObserver($reader1);
        $newsAgency->addObserver($reader2);

        $newsAgency->setNews("Breaking News: Observer Pattern Example!");

        $newsAgency->removeObserver($reader1);

        $newsAgency->setNews("Latest updates: Observer Pattern in PHP!");

    }

}
