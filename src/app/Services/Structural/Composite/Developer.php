<?php


namespace App\Services\Structural\Composite;


class Developer implements \App\Contracts\Structural\Composite\Employee
{

    private $name;
    private $salary;

    /**
     * Developer constructor.
     * @param $name
     * @param $salary
     */
    public function __construct($name, $salary)
    {
        $this->name = $name;
        $this->salary = $salary;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getSalary(): float
    {
        return $this->salary;
    }
}
