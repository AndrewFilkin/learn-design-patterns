<?php


namespace App\Services\Structural\DependencyInjection;


class UserService
{
    private $database;

    /**
     * UserService constructor.
     * @param $database
     */
    public function __construct(DatabaseConnection $database)
    {
        $this->database = $database;
    }

    public function getUserData() {
        // Use $this->database to fetch user data
//        $this->database->connect();
        return 'User data fetched';
    }

}
