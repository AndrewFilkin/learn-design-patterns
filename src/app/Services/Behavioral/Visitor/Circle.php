<?php


namespace App\Services\Behavioral\Visitor;


use App\Contracts\Behavioral\Visitor\Shape;
use App\Contracts\Behavioral\Visitor\Visitor;

class Circle implements Shape
{
    private $radius;

    public function __construct($radius) {
        $this->radius = $radius;
    }

    public function accept(Visitor $visitor) {
        $visitor->visitCircle($this);
    }

    public function getRadius() {
        return $this->radius;
    }
}
