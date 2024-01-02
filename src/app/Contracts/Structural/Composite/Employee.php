<?php


namespace App\Contracts\Structural\Composite;


interface Employee
{
    public function getName(): string;
    public function getSalary(): float;
}
