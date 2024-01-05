<?php


namespace App\Services\Behavioral\Mediator;


use App\Contracts\Behavioral\Mediator\Colleague;

class ChatMediator implements \App\Contracts\Behavioral\Mediator\Mediator
{
    private $colleagues = [];

    public function addColleague(Colleague $colleague) {
        $this->colleagues[] = $colleague;
    }

    public function sendMessage(string $message, Colleague $colleague) {
        foreach ($this->colleagues as $c) {
            if ($c !== $colleague) {
                $c->receiveMessage($message);
            }
        }
    }
}
