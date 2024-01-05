<?php


namespace App\Services\Behavioral\Command;


use App\Contracts\Behavioral\Command\Command;

class RemoteControl
{
    private $command;

    public function setCommand(Command $command) {
        $this->command = $command;
    }

    public function pressButton() {
        $this->command->execute();
    }
}
