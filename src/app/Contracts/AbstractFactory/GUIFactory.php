<?php


namespace App\Contracts\AbstractFactory;


interface GUIFactory
{
    public function createButton(): Button;
    public function createDialog(): Dialog;
}
