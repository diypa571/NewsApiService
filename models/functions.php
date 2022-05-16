<?php

class Article {
 // Private and Public members
    private $newstb = "news"; // the news table
    private $conn; // the connection
   // Column names in the news table
    public $id;
    public $title;
    public $summary;
    public $content;
    public $author;
    public $image;
    public $date;

    
  // The default constructor will initiate the database connection
  // The constructor has one parameter, that will be used for the connection
    public function __construct($db){
        $this->conn = $db;
    }

 	// For display record from the db
 	function display(){
 
	}
	
	// For adding a new post
 	function add(){
 
	}
 	
	// For removing posts
 	function remove(){
	 
	}
 
 	// For updating records
  	function update(){
	 
	}
 

}
?>
