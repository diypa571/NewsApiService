<?php
// Creating a class
class TheDb{

// Private memebers
  private $host  = 'localhost';
  private $user  = '********';
  private $password   = "********";
  private $database  = "********";

// Creating a function for connecting to the database
    public function getConn(){
		$conn = new mysqli($this->host, $this->user, $this->password, $this->database);
		if($conn->connect_error){
			die("Error- db connection " . $conn->connect_error);
		} else {
			// if no error return conn
			return $conn;
		}
    }
}
?>

