<?php


namespace App\Services\Behavioral\Memento;


class Editor
{
    private $content;

    public function setContent($content) {
        $this->content = $content;
    }

    public function getContent() {
        return $this->content;
    }

    public function createMemento() {
        return new EditorMemento($this->content);
    }

    public function restoreFromMemento(EditorMemento $memento) {
        $this->content = $memento->getContent();
    }
}
