<?php
  require_once('vendor/autoload.php');

  use App\Database\DatabaseConnection;
  use App\config\Mail;
  use App\Model\User;

  class Post{
    public function __construct($title){
        echo $title;
    }
  } 
  
//   new Post('Cv blog'); 

new DatabaseConnection;
new Mail;
$user = new User;
    
?>