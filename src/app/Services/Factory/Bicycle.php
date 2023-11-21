<?php


namespace App\Services\Factory;

use App\Contracts\Factory\Vehicle;

class Bicycle implements Vehicle
{

    public function drive(): string
    {
        return 'Driving a Bicycle';
    }
}
