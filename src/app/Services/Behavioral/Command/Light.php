<?php


namespace App\Services\Behavioral\Command;


class Light
{
    public function turnOn() {
        echo "Light is ON" . '</br>';
    }

    public function turnOff() {
        echo "Light is OFF" . '</br>';
    }
}
