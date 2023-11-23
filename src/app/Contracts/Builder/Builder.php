<?php


namespace App\Contracts\Builder;


interface Builder
{
    public function buildPart1();

    public function buildPart2();

    public function buildPart3();

    public function getResult();

}
