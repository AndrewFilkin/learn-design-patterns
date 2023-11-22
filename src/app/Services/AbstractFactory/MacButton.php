<?php


namespace App\Services\AbstractFactory;

use App\Contracts\AbstractFactory\Button;


class MacButton implements Button
{

    public function render(): void
    {
        echo "Render Mac Button" . '</br>';
    }
}
