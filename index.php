<?php
include "interface/comparator.php";
include "Comparable/Comparable.php";
include "Shape class/Circle.php";
include "Shape class/Square.php";

$circleOne = new Circle("circleOne",10);
$circleTwo = new Circle("circleTwo",20);
$circleComparable = new ComparableShape();
var_dump($circleComparable->compareTo($circleOne,$circleTwo));
echo "<br>";
$rectangleOne = new Rectangle("rectangleOne",50,20);
$rectangleTwo = new Rectangle("rectangleOne",40,20);
var_dump($circleComparable->compareTo($rectangleOne,$rectangleTwo));
echo "<br>";
$square1 = new Square("Spare1",50);
$square2 = new Square("square2",50);
var_dump($circleComparable->compareTo($square1,$square2));