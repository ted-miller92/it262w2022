<?php
// classes2.php

// database tables are named the plural of the items it describes

// classes can be declared anywhere, similar to functions, they are saved in memory for use at any point

// instantiate an instance of the class Car
$cars[] = new Car('Volkswagen', 'Jetta', 10000, 'Black');
$cars[] = new Car('Honda', 'Accord', 20000, 'Silver');
$cars[] = new Car('Nissan', 'Altima', 15000, 'Yellow');

$total = 0;

foreach($cars as $myCar){
    echo "<p>My car is a $myCar->color $myCar->make $myCar->model. It has $myCar->mileage miles on it.</p>";
    $total += $myCar->mileage;
}

$carCount = count($cars);
$average = $total / $carCount;
$average = number_format($average, 2);

echo "<p>There are $carCount cars, and the average mileage is $average miles</p>";

// echo '<pre>';
// var_dump($myCar);
// echo '</pre>';



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