<?php


namespace App\Services\Factory;

use App\Contracts\Factory\VehicleFactory;
use App\Contracts\Factory\Vehicle;


class CarFactory implements VehicleFactory
{

    public function createVehicle(): Vehicle
    {
        return new Car();
    }
}
