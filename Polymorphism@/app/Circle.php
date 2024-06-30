<?php

namespace app;

use app\vivo\Shape;

class Circle implements Shape
{
    private $radius;
    public function __construct($radius)
    {
        $this->radius = $radius;
    }
    public function getArea()
    {
        return $this->radius * $this->radius * pi();
    }
}
