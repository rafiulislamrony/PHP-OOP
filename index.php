<?php

class Car
{
    //properties
    public $name;
    public $color = "Black";
    public function __construct($car_name, $color="blue")
    {
        $this->name = $car_name;
        $this->color = $color;
    } 
    //method 
    public function getCarName()
    {
        return $this->name;
    } 
    public function getCarColor()
    {
        return $this->color;
    } 

}
//object 
$bmw = new Car("BMW Car", "red"); 
//  echo $bmw->name; 
echo $bmw->getCarColor();

// object 2nd
// $nissian = new Car();
// // echo $nissian->name;
// //echo $nissian->getCarName();
// echo $nissian->setCarName("nissian Car");


?>
