<?php

trait Logger{
    public $name = "Logger";
    public function log($message){
        echo $message;
    }
} 
class Post
{
    use Logger;
    public function store(){
        echo $this->name;
        // post store
        $this->log('post created');
    }
}

class Comment
{
    use Logger;
    public function store(){
        // post store
        $this->log('comment created');
    }
}

$post = new Post();
$post->store();
  
$Comment = new Comment();
$Comment->store();

?>