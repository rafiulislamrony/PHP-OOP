<?php

class Car
{
    //properties
    public $name = "Car Name";

    //method 
    public function getCarName(){
        return $this->name;
    }
    public function setCarName($car_name){
        return $this->name = $car_name;
    }

}
//object 
// $bmw = new Car();
// $bmw->name = "BMW Car";
// echo $bmw->name;
// echo $bmw->getCarName();

// object 2nd
$nissian = new Car();
// echo $nissian->name;
//echo $nissian->getCarName();
 echo $nissian->setCarName("nissian Car"); 


?>