<?php


namespace App\Services\Behavioral\Memento;


class History
{
    private $mementos = [];

    public function addMemento(EditorMemento $memento) {
        $this->mementos[] = $memento;
    }

    public function getMemento($index) {
        return $this->mementos[$index];
    }
}
