<?php


namespace App\Services\AbstractFactory;

use App\Contracts\AbstractFactory\Dialog;


class MacDialog implements Dialog
{

    public function show(): void
    {
        echo "Show Mac Dialog" . '</br>';
    }
}
