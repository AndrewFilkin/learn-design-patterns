<?php

namespace App\Http\Controllers;

use App\Contracts\Structural\Composite\Employee;
use App\Services\Structural\Bridge\Circle;
use App\Services\Structural\Bridge\RasterRenderer;
use App\Services\Structural\Bridge\Square;
use App\Services\Structural\Bridge\VectorRenderer;
use App\Services\Structural\Composite\Developer;
use App\Services\Structural\Composite\Manager;
use App\Services\Structural\DependencyInjection\DatabaseConnection;
use App\Services\Structural\DependencyInjection\UserService;
use App\Services\Structural\Registry\PrototypeRegistry;
use App\Services\Structural\Registry\ProductPrototype;
use App\Services\Structural\Adapter\OldSystem;
use App\Services\Structural\Adapter\OldSystemAdapter;
use App\Services\Structural\Adapter\SomeNewSystem;

class TestStructuralPatternController extends Controller
{
    public function dependencyInjection()
    {
        $databaseConnection = new DatabaseConnection();
        $userService = new UserService($databaseConnection);

        $data = $userService->getUserData();
        echo $data;
    }

    public function registry()
    {
        // Instantiate the registry
        $registry = new PrototypeRegistry();

// Register a product prototype
        $productPrototype = new ProductPrototype();
        $productPrototype->name = "Prototype Product";
        $productPrototype->price = 100;

        $registry->registerPrototype('product', $productPrototype);

// Create an instance using the prototype
        $newProduct = $registry->createInstance('product');

// Output the new product details
        echo "New Product Name: " . $newProduct->name . "</br>";
        echo "New Product Price: " . $newProduct->price . "</br>";
    }

    public function composite()
    {
        // Client code
        $developer1 = new Developer("John Doe", 50000);
        $developer2 = new Developer("Jane Doe", 60000);

        $manager = new Manager("Manager Name", 80000);
        $manager->add($developer1);
        $manager->add($developer2);

        $manager2 = new Manager("Manager 2", 90000);
        $manager2->add($manager);

// Print information
        function printEmployeeDetails(Employee $employee)
        {
            echo $employee->getName() . " - Salary: $" . $employee->getSalary() . '</br>';

            if ($employee instanceof Manager) {
                foreach ($employee->getSubordinates() as $subordinate) {
                    printEmployeeDetails($subordinate);
                }
            }
        }

        printEmployeeDetails($manager2);
    }

    public function adapter()
    {
        $newSystem = new SomeNewSystem(new OldSystemAdapter(new OldSystem()));
        $result = $newSystem->makeRequest();
        echo $result;
    }

    public function bridge()
    {
        $vectorRenderer = new VectorRenderer();
        $rasterRenderer = new RasterRenderer();

        $circle = new Circle($vectorRenderer);
        $square = new Square($rasterRenderer);

        echo $circle->draw() . '</br>'; // Output: Drawing Circle using Vector Renderer
        echo $square->draw() . '</br>'; // Output: Drawing Square using Raster Renderer
    }

}
