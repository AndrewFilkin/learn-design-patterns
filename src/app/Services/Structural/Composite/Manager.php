<?php


namespace App\Services\Structural\Composite;

use App\Contracts\Structural\Composite\Employee;


class Manager implements \App\Contracts\Structural\Composite\Employee
{

    private $name;
    private $salary;
    private $subordinates = [];

    /**
     * Manager constructor.
     * @param $name
     * @param $salary
     */
    public function __construct($name, $salary)
    {
        $this->name = $name;
        $this->salary = $salary;
    }

    public function add(Employee $employee)
    {
        $this->subordinates[] = $employee;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getSalary(): float
    {
        return $this->salary;
    }

    public function getSubordinates(): array
    {
        return $this->subordinates;
    }
}
