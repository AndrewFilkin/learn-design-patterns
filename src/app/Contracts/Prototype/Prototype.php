<?php


namespace App\Contracts\Prototype;


interface Prototype
{
    public function clone(): Prototype;
}
