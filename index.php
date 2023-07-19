<?php

abstract class Car
{
    public function noWhells(){
        echo 'Whells : 4';
    }
    abstract public function price($price);

}

class BMW extends Car{
    public function price($price){
        echo "Price : " . $price;
    }
}

$BMW = new BMW(); 
$BMW->price('100');

?>