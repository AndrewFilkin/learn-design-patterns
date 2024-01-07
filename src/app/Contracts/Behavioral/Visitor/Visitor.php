<?php


namespace App\Contracts\Behavioral\Visitor;

use App\Services\Behavioral\Visitor\Circle;
use App\Services\Behavioral\Visitor\Square;

interface Visitor
{
    public function visitCircle(Circle $circle);
    public function visitSquare(Square $square);
}
