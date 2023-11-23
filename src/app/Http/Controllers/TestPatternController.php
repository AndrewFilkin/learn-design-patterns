<?php

namespace App\Http\Controllers;

use App\Services\Builder\ConcreteBuilder;
use App\Services\Builder\Director;
use App\Services\Factory\BicycleFactory;
use App\Services\Factory\CarFactory;
use App\Services\Factory_Method\ConcreteCreatorA;
use App\Services\Factory_Method\Run;
use App\Services\Singleton\Singleton;
use App\Services\AbstractFactory\MacFactory;
use App\Services\AbstractFactory\Run as RunAbstractFactory;


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

    public function singleton()
    {
        $singleton = Singleton::getInstance();
        echo $singleton->dbConnetor;
    }

    public function factoryMethod()
    {
        $product = new Run();
        $product->clientCode(new ConcreteCreatorA());
    }

    public function abstractFactory()
    {
        $run = new RunAbstractFactory();
        $macFactory = new MacFactory();
        $run->createUI($macFactory);
    }

    public function builder()
    {
        $builder = new ConcreteBuilder();
        $director = new Director();

        $director->construct($builder);
        $product = $builder->getResult();
        $product->showParts();
    }

}
