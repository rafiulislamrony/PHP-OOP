<?php

 
class User
{ 
    public static $email = "user@gmail.com";
    public static function getAge(){
        return 10;
    }
    public static function getName(){
        return "User Name and age ". self::getAge() . " and email: ".self::$email;
    }
}
class Post extends User {
    public static function allPost(){
        return " User Post : ". parent::getName();
    }
}
 
// $user = new User();
// echo User::getName();
// echo User::$email;
 echo Post::allPost(); 
   
?>