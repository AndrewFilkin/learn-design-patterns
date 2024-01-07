<?php


namespace App\Services\Behavioral\Visitor;


use App\Services\Behavioral\Visitor\Circle;
use App\Services\Behavioral\Visitor\Square;

class AreaCalculator implements \App\Contracts\Behavioral\Visitor\Visitor
{
    public function visitCircle(Circle $circle) {
        $area = pi() * $circle->getRadius() * $circle->getRadius();
        echo "Area of Circle: {$area}" . '</br>';
    }

    public function visitSquare(Square $square) {
        $area = $square->getSide() * $square->getSide();
        echo "Area of Square: {$area}" . '</br>';
    }
}
