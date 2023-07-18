
<?php 

class DatabaseConnection{
    private $connection;
    public function __construct($host, $username, $password, $database){
        $this->connection = mysqli_connect($host, $username, $password, $database);

        if(!$this->connection){
            die('Error: '. mysqli_connect_error());
        }
    }

    public function query($sql){
        $result = mysqli_query($this->connection,$sql);
        if(!$result){
            die('Error '.mysqli_error($this->connection));
        }
        return $result;
    }

    public function __destruct(){
        mysqli_close($this->connection);
    } 

}

$db = new DatabaseConnection('localhos', 'root', '', 'mydatabase');

$query = 'SELECT * FROM users';

$result = $db->query($query);


?>
