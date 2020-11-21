<?php

class Car {
    public $wheel = 4;
    protected $hood = 1;
    private $engine = 1;
    static $window = 1;
    var $door = 4;

    function MoveWheels() {
        echo $this->wheel = 10;
    }
}

if(class_exists("Car")) {
    echo "Yaeaay Nice\n";
} else {
    echo "no";
}

if(method_exists("Car","MoveWheels")) {
    echo "Yaeaay Nice\n";
} else {
    echo "no";
}

$bmw = new Car();
echo $bmw->MoveWheels()  . "<br>";

//$mercedes = new Car();
//echo $mercedes->MoveWheels();

$truck = new Car();
echo $truck->wheel = 10 . "<br>";
echo $truck->door  . "<br>";



class Plane extends Car{
    function __construct() {
        $this->wheel = 10;
    }
}

$jet = new Plane();
echo $jet->wheel;

if(class_exists("Plane")) {
    echo "Plane exists";
} else {
    echo "No";
}

echo Plane::$window;



