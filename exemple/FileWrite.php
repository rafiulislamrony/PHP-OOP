<?php 
class FileWrite{
    private $resource;
     
    public function __construct(){
        $this->resource = fopen('exemple.txt', 'w');
    }

    public function write($text){
        fwrite($this->resource, $text);
    }

    public function __destruct(){
        fclose($this->resource);
    }
}

// Create object 
$obj = new FileWrite();

$obj->write('Hi Man');


?>