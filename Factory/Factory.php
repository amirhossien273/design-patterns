<?php

interface ShapeInterface {

    public function draw();
}

class Circle implements ShapeInterface {

    public function draw()
    {
        return "draw circle";
    }
}

class Square implements ShapeInterface {

    public function draw()
    {
        return "draw square";
    }
}

class Shape {

    public function create(ShapeInterface $shape)
    {
        return $shape;
    }
}

$shape = new Shape();

echo $shape->create(new Circle())->draw();
echo "<br>";
echo $shape->create(new Square())->draw();