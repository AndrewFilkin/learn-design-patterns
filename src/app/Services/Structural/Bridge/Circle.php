<?php


namespace App\Services\Structural\Bridge;

use App\Contracts\Structural\Bridge\Renderer;

class Circle implements \App\Contracts\Structural\Bridge\Shape
{
    protected $renderer;

    public function __construct(Renderer $renderer) {
        $this->renderer = $renderer;
    }

    public function draw() {
        return 'Drawing Circle using ' . $this->renderer->render();
    }
}
