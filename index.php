<?php

class Car
{
    //properties
    public $name;
    public $color = "";
    public function __construct($car_name, $color="blue")
    {
        $this->name = $car_name;
        $this->color = $color;
        echo "inside this constructor </br>";
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
    public function __destruct()
    {
        echo "</br> Inside this destructor";
    } 

}
//object 
$bmw = new Car("BMW Car ", "red"); 
echo 'object is created</br>';
echo $bmw->getCarName();





// object 2nd
// $nissian = new Car();
// // echo $nissian->name;
// //echo $nissian->getCarName();
// echo $nissian->setCarName("nissian Car");


?>
