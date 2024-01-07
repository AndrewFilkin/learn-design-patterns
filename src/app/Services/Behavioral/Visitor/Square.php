<?php


namespace App\Services\Behavioral\Visitor;


use App\Contracts\Behavioral\Visitor\Visitor;

class Square implements \App\Contracts\Behavioral\Visitor\Shape
{
    private $side;

    public function __construct($side) {
        $this->side = $side;
    }

    public function accept(Visitor $visitor) {
        $visitor->visitSquare($this);
    }

    public function getSide() {
        return $this->side;
    }
}
