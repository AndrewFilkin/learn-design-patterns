<?php


namespace App\Services\Singleton;


class Singleton
{
    private static $instance;

    public $dbConnetor;

    private function __construct(string $dbConnetor)
    {
        $this->dbConnetor = $dbConnetor;
    }

    public static function getInstance(): self
    {
        if (self::$instance === null) {
            self::$instance = new self('connect to db');
        }

        return self::$instance;
    }

    // Other methods and properties can be added here
}
