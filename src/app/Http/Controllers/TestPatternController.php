<?php

namespace App\Http\Controllers;

use App\Services\Builder\ConcreteBuilder;
use App\Services\Builder\Director;
use App\Services\Factory\BicycleFactory;
use App\Services\Factory\CarFactory;
use App\Services\Factory_Method\ConcreteCreatorA;
use App\Services\Factory_Method\Run;
use App\Services\Prototype\BookBuilder;
use App\Services\Singleton\Singleton;
use App\Services\AbstractFactory\MacFactory;
use App\Services\AbstractFactory\Run as RunAbstractFactory;
use App\Services\Prototype\Book;
use App\Services\Prototype\ConcretePrototype;



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

    public function prototype()
    {
// Client code
        $original = new ConcretePrototype("Original Property");

// Clone the original object
        $clone = $original->clone();

// Modify the cloned object's property
        $clone->setProperty("Modified Property");

// Output the properties of both objects
        echo "Original Property: " . $original->getProperty() . "</br>";
        echo "Cloned Property: " . $clone->getProperty() . "</br>";
    }


}
