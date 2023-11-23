<?php


namespace App\Services\Builder;

use App\Contracts\Builder\Builder;


class Director
{
    public function construct(Builder $builder)
    {
        $builder->buildPart1();
        $builder->buildPart2();
        $builder->buildPart3();
    }
}
