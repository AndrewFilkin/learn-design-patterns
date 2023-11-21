<?php


namespace App\Contracts\Factory;


use App\Contracts\Factory\Vehicle;

interface VehicleFactory
{
    public function createVehicle(): Vehicle;
}
