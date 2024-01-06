<?php


namespace App\Services\Behavioral\TemplateMethod;


class ConcreteClass extends AbstractClass
{
    protected function operation1() {
        echo "Implementation of operation1" . '</br>';
    }

    protected function operation2() {
        echo "Implementation of operation2" . '</br>';
    }

    // Optionally override the hook method
    protected function operation3() {
        echo "Overridden implementation of operation3" . '</br>';
    }
}
