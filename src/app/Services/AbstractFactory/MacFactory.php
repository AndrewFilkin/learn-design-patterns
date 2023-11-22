<?php


namespace App\Services\AbstractFactory;

use App\Contracts\AbstractFactory\Button;
use App\Contracts\AbstractFactory\Dialog;
use App\Contracts\AbstractFactory\GUIFactory;


class MacFactory implements GUIFactory
{

    public function createButton(): Button
    {
        return new MacButton();
    }

    public function createDialog(): Dialog
    {
        return new MacDialog();
    }
}
