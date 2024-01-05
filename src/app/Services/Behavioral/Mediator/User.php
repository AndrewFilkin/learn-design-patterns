<?php


namespace App\Services\Behavioral\Mediator;


use App\Contracts\Behavioral\Mediator\Mediator;

class User implements \App\Contracts\Behavioral\Mediator\Colleague
{
    private $mediator;
    private $name;

    public function __construct(string $name) {
        $this->name = $name;
    }

    public function setMediator(Mediator $mediator) {
        $this->mediator = $mediator;
    }

    public function sendMessage(string $message) {
        echo "{$this->name} sending message: {$message}" . '</br>';
        $this->mediator->sendMessage($message, $this);
    }

    public function receiveMessage(string $message) {
        echo "{$this->name} received message: {$message}" . '</br>';
    }
}
