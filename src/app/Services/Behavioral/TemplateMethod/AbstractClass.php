<?php


namespace App\Services\Behavioral\TemplateMethod;


abstract class AbstractClass
{
    // The template method defines the skeleton of the algorithm
    final public function templateMethod() {
        $this->operation1();
        $this->operation2();
        $this->operation3();
    }

    // Abstract methods that subclasses must implement
    abstract protected function operation1();
    abstract protected function operation2();

    // Hook method with a default implementation
    protected function operation3() {
        echo "Default implementation of operation3" . '</br>';
    }
}
