<?php

class Article {
    private $newstb = "news";
    public $id;
    public $title;
    public $summary;
    public $content;
    public $author;
    public $image;
	  public $date;
    private $conn;
    
  // The default constructor will initiate the database connection
  // The constructor has one parameter, that will be used for the connection
    public function __construct($db){
        $this->conn = $db;
    }


}
?>
