<?php


namespace App\Services\Behavioral\Command;


class LightOnCommand implements \App\Contracts\Behavioral\Command\Command
{
    private $light;

    public function __construct(Light $light) {
        $this->light = $light;
    }

    public function execute() {
        $this->light->turnOn();
    }

    public function execute_light_off()
    {
        $this->light->turnOff();
    }
}
