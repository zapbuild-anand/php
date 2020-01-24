<?php
Interface Shape {
    public function getName();

    public function getArea();
}
class Rectangle implements Shape {

    private $width;
    private $length;

    public function __construct(float $width, float $length)
    {
        $this->width = $width;
        $this->length = $length;
    }

    public function getName()
    {
        return "Rectangle";
    }


    public function getArea()
    {
        return $this->width * $this->length;
    }
}
class Triangle implements Shape {

    private $base;
    private $height;

    public function __construct(float $base, float $height)
    {
        $this->base = $base;
        $this->height = $height;
    }

    public function getName()
    {
        return "Triangle";
    }

    public function getArea()
    {
        return $this->base * $this->height * 0.5;
    }
}
function printArea(Shape $shape)
{
    echo "The area of `{$shape->getName()}` is {$shape->getArea()}" . "<br>";
}

$shapes = [];
$shapes[] = new Rectangle(10.0, 10.0);
$shapes[] = new Triangle(10.0, 10.0);

foreach ($shapes as $shape) {
    printArea($shape);
}
?>