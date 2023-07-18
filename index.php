<?php

class Car
{
    //properties
    // public $name = "Car Name";
    // protected $model = "Car_x";
    // public $color = "Red";
    // //method 
    // public function detail()
    // {
    //     echo $this->name . '<br/>';
    //     echo $this->model . '<br/>'; // 
    //     echo $this->color . '<br/>'; // 
    // }


    //method
    public function publicMethod(){
        echo 'This is public method </br>';
    }
    protected function protectedMethod(){
        echo 'This is protected method </br>';
    }
    private function privateMethod()
    {
        echo 'This is a private method </br>';
    }
    public function callPrivateMethod()
    {
       $this->privateMethod();
    }


}
//object 
$bmw = new Car();

$bmw->publicMethod();
// $bmw->protectedMethod();
$bmw->callPrivateMethod();










//  $bmw->name= "Bmw Car";
//$bmw->model= "Bmw-X";
//  $bmw->detail();
// echo $bmw->name . '<br/>';
//echo $bmw->model . '<br/>'; //Error
// echo $bmw->color . '<br/>'; //Error 
 


?>