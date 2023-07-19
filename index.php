<?php

class Car
{
    //properties
    public $name;
    protected $model;
    private $color;
    // //method 
    public function __construct($name, $model, $color){
        $this->name = $name;
        $this->model = $model;
        $this->color = $color;
    }
    public function enginePowerdBy(){
        echo "Diesal";
    }
    public function detail()
    {
        echo $this->name . '<br/>';
        echo $this->model . '<br/>'; // 
        echo $this->color . '<br/>'; // 
        echo $this->ownerName. '<br/>';
    } 
} 

class Tesla extends Car{
    public $ownerName;
    // public function __construct($name, $model, $color, $ownerName){
    //     $this->name = $name;
    //     $this->model = $model;
    //     $this->color = $color; 
    // }
    // public function enginePowerdBy(){
    //     echo "Battery";
    // }
}

$tesla =new Tesla('tesla', 'teslax', 'RED');

$tesla->detail(); 
// $tesla->enginePowerdBy(); 



 


?>