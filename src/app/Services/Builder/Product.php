<?php


namespace App\Services\Builder;


class Product
{
    private $parts = [];

    public function addPart($part)
    {
        $this->parts[] = $part;
    }

    public function showParts()
    {
        echo "Product parts: " . implode(', ', $this->parts) . "</br>";
    }
}
