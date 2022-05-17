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
		// If we have a known id for one article
	if($this->id) {
		$query = $this->conn->prepare("SELECT * FROM ".$this->newstb." WHERE id = ?");
		$query->bind_param("i", $this->id);
	} else {
		// We dont specify one id, display all
		$query = $this->conn->prepare("SELECT * FROM ".$this->newstb);
	}
		// Execute the query
	$query->execute();

	$result = $query->get_result();
	return $result;
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
