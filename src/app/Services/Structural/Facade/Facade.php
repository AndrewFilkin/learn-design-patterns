<?php


namespace App\Services\Structural\Facade;


class Facade
{
    private $subsystemOne;
    private $subsystemTwo;
    private $subsystemThree;

    public function __construct() {
        $this->subsystemOne = new SubsystemOne();
        $this->subsystemTwo = new SubsystemTwo();
        $this->subsystemThree = new SubsystemThree();
    }

    // Facade methods that simplify the interface for the client
    public function operationFacade() {
        $this->subsystemOne->operationOne();
        $this->subsystemTwo->operationTwo();
        $this->subsystemThree->operationThree();
    }
}
