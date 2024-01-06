<?php


namespace App\Services\Behavioral\Memento;


class EditorMemento
{
    private $content;

    public function __construct($content) {
        $this->content = $content;
    }

    public function getContent() {
        return $this->content;
    }
}
