<?php

class Car
{
   const noOfWhels = "No Of Whells is 4";
   public function getNoOfWhells(){
    return self::noOfWhels;
   }

}

// echo $whells= Car::noOfWhels;
$car = new Car();
echo $car->getNoOfWhells(); 

?>