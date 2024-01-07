<?php


namespace App\Contracts\Behavioral\Visitor;


interface Shape
{
    public function accept(Visitor $visitor);
}
