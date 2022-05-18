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
$query = $this->conn->prepare("	INSERT INTO ".$this->newstb."(`title`, `summary`, `content`, `author`, `image`, `date`)	VALUES(?,?,?,?,?)");
	$this->title = $this->title;
	$this->summary = $this->summary;
	$this->content = $this->content;
	$this->author = $this->author;
	$this->image = $this->image;;
$this->date = $this->date;
	$query->bind_param("ssssss", $this->title, $this->summary, $this->content, $this->author, $this->image, $this->date);
	if($query->execute()){
		return true;
	}
	return false;
}

// For removing posts
function remove(){

}

// For updating records
function update(){
	$query = $this->conn->prepare("
		UPDATE ".$this->newstb."
		SET title= ?, summary = ?, content = ?, author = ?, image = ?
		WHERE id = ?");

	$this->id = $this->id;
	$this->title = $this->title;
	$this->summary = $this->summary;
	$this->content = $this->content;
	$this->author = $this->author;
	$this->image = $this->image;

	$query->bind_param("ssssss", $this->title, $this->summary, $this->content, $this->author, $this->image, $this->id);

	if($query->execute()){
		return true;
	}

	return false;
}
?>
