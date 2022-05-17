<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

include_once '../models/_core.php';
include_once '../models/functions.php';

$database = new TheDb();
$db = $database->getConn();

$arr = new Article($db);

$arr->id = (isset($_GET['id']) && $_GET['id']) ? $_GET['id'] : '0';

$result = $arr->display();

if($result->num_rows > 0){
$posts=array();
$posts["arr"]=array();
while ($row = $result->fetch_assoc()) {
    extract($row);
    $rowinfo=array(
        "id" => $id,
        "title" => $title,
        "summary" => $summary,
	"content" => $content,
        "author" => $author,
	"image" => $image,
        "date" => $date
    );
   array_push($posts["arr"], $rowinfo);
}
http_response_code(200);
echo json_encode($posts);
}else{
http_response_code(404);
echo json_encode(
    array("Note =>" => "The news could not be found.")
);
}

