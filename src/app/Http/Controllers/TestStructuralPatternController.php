<?php

namespace App\Http\Controllers;

use App\Services\Structural\DependencyInjection\DatabaseConnection;
Use App\Services\Structural\DependencyInjection\UserService;

class TestStructuralPatternController extends Controller
{
    public function dependencyInjection()
    {
        $databaseConnection = new DatabaseConnection();
        $userService = new UserService($databaseConnection);

        $data = $userService->getUserData();
        echo $data;
    }
}
