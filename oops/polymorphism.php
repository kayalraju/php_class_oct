<?php

class Shape
{
    public function area()
    {
        return 0;
    }
}

class Rectangle extends Shape
{
    public function area()
    {
        return 10 * 5;
    }
}

class Circle extends Shape
{
    public function area()
    {
        return 3.14 * 5 * 5;
    }
}

class Square extends Shape
{
    public function area()
    {
        return 30 * 5;
    }
}

// Polymorphism
$shapes = [
    new Rectangle(),
    new Circle(),
    new Square()
];

foreach ($shapes as $shape) {
    echo $shape->area() . PHP_EOL ."<br>";
}