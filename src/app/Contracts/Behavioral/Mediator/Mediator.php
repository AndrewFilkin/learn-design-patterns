<?php


namespace App\Contracts\Behavioral\Mediator;


interface Mediator
{
    public function sendMessage(string $message, Colleague $colleague);
}
