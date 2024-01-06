<?php


namespace App\Services\Behavioral\Observer;


class NewsReader implements \App\Contracts\Behavioral\Observer\Observer
{
    private $name;

    public function __construct($name) {
        $this->name = $name;
    }

    public function update($data) {
        echo $this->name . " received news: " . $data . '</br>';
    }
}
