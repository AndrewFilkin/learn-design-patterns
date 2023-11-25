<?php

namespace App\Http\Controllers;

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

}
