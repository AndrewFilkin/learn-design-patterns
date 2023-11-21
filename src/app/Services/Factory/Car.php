<?php


namespace App\Services\Factory;

use App\Contracts\Factory\Vehicle;


class Car implements Vehicle
{

    public function drive(): string
    {
        return "Driving a car";
    }
}
