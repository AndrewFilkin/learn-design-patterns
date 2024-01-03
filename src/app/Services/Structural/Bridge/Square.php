<?php


namespace App\Services\Structural\Bridge;

use App\Contracts\Structural\Bridge\Renderer;

class Square implements \App\Contracts\Structural\Bridge\Shape
{
    protected $renderer;

    public function __construct(Renderer $renderer) {
        $this->renderer = $renderer;
    }

    public function draw() {
        return 'Drawing Square using ' . $this->renderer->render();
    }
}
