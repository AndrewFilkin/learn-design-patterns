<?php


namespace App\Contracts\Behavioral\Mediator;


interface Colleague
{
    public function setMediator(Mediator $mediator);
    public function sendMessage(string $message);
    public function receiveMessage(string $message);
}
