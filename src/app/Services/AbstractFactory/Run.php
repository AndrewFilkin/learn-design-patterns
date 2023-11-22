<?php


namespace App\Services\AbstractFactory;

use App\Contracts\AbstractFactory\GUIFactory;


class Run
{
    function createUI(GUIFactory $factory)
    {
        $button = $factory->createButton();
        $dialog = $factory->createDialog();

        $button->render();
        $dialog->show();
    }
}
