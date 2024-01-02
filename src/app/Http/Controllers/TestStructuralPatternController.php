<?php

namespace App\Http\Controllers;

use App\Contracts\Structural\Composite\Employee;
use App\Services\Structural\Composite\Developer;
use App\Services\Structural\Composite\Manager;
use App\Services\Structural\DependencyInjection\DatabaseConnection;
use App\Services\Structural\DependencyInjection\UserService;
use App\Services\Structural\Registry\PrototypeRegistry;
use App\Services\Structural\Registry\ProductPrototype;

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

}
