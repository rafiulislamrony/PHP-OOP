<?php 
namespace App\Model;
use App\Database\DatabaseConnection;

  class User extends DatabaseConnection{
   public function __construct(){
    echo "User Model";
   }
  } 
