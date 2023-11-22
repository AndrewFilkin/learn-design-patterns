<?php


namespace App\Contracts\Factory_Method;

interface Creator
{
    public function createProduct(): Product;
}
