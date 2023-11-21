<?php

namespace App\Http\Controllers;

use App\Services\Factory\BicycleFactory;
use App\Services\Factory\CarFactory;
use App\Services\Factory\TestPatternService;


class TestPatternController extends Controller
{

    public function factory()
    {
        $carFactory = new CarFactory();
        $car = $carFactory->createVehicle();

        $bicycleFactory = new BicycleFactory();
        $bicycle = $bicycleFactory->createVehicle();

        echo $car->drive() . ' ' . '</br>';
        echo $bicycle->drive();
    }
}
