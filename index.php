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
    final function noOfWheels(){
        echo 4;
    }
    public function detail()
    {
        echo $this->name . '<br/>';
        echo $this->model . '<br/>'; // 
        echo $this->color . '<br/>'; // 
    } 
} 

final class BMW{
    public function enginePowerdBy(){
        echo "Electric";
    }
}

// class Tesla extends BMW{
//     public function enginePowerdBy(){
//         echo "Battery";
//     }
// }
$BMW =new BMW();
$BMW->enginePowerdBy();

// $tesla =new Tesla('tesla', 'teslax', 'RED');
// $tesla->noOfWheels();  



 


?>