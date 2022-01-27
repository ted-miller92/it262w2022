<?php
// classes.php

// database tables are named the plural of the items it describes

// classes can be declared anywhere, similar to functions, they are saved in memory for use at any point

// instantiate an instance of the class Car
$myCar = new Car('Volkswagen', 'Golf', 10000, 'Black');

// echo $myCar->mileage; // will return 0
echo '<pre>';
var_dump($myCar);
echo '</pre>';

// class names a singular and Upper case
class Car {
    // properties
    // keyword public means the variable is available outside the class
    public $make = '';
    public $model = '';
    public $mileage = 0;
    public $color = '';

    // constructor
    public function __construct($make, $model, $mileage, $color)
    {
        $this->make = $make;
        $this->model = $model;
        $this->mileage = $mileage;
        $this->color = $color;
    }
}