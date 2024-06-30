<?php
// Need to install composer
use app\Circle;
use app\Square;
use app\vivo\Shape;

require_once("./vendor/autoload.php");

class Sheet
{
    public function __construct()
    {
        $square = new Square(120, 210);
        // echo "Square Area: " . $square->getArea() . "<br>";
        $this->getPrice($square);

        $circle = new Circle(20);
        $this->getPrice($circle);
    }
    public function getPrice(Shape $params)
    {
        $area = $params->getArea();
        echo "Your Total Price is : " . $area * 2 . "<br>";
    }
}

$obj = new Sheet();
