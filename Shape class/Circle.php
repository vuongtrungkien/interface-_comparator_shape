<?php

class Circle
{
    public $radius;
    public $name;
    public function __construct($name, $radius)
    {
        $this->radius = $radius;
        $this->name = $name;
    }
    public function getName() {
        return $this->name;
    }
    public function setName($name) {
        $this->name = $name;
    }
    public function getArea()
    {
        return pi() * pow($this->radius, 2);

    }

}