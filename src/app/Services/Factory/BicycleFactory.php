<?php


namespace App\Services\Factory;


use App\Contracts\Factory\VehicleFactory;
use App\Contracts\Factory\Vehicle;


class BicycleFactory implements VehicleFactory
{

    public function createVehicle(): Vehicle
    {
        return new Bicycle();
    }
}
