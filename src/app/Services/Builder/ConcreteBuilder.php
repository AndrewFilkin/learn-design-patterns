<?php


namespace App\Services\Builder;


class ConcreteBuilder implements \App\Contracts\Builder\Builder
{

    private $product;

    public function __construct()
    {
        $this->product = new Product();
    }


    public function buildPart1()
    {
        $this->product->addPart("Part 1");
    }

    public function buildPart2()
    {
        $this->product->addPart("Part 2");
    }

    public function buildPart3()
    {
        $this->product->addPart("Part 3");
    }


    public function getResult()
    {
        return $this->product;
    }
}
