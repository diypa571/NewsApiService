<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

include_once '../models/_core.php';
include_once '../models/functions.php';

$database = new TheDb();
$db = $database->getConn();

$arr = new Article($db);

$data = json_decode(file_get_contents("php://input"));

if(!empty($data->id) && !empty($data->title) &&
!empty($data->summary) && !empty($data->content) &&
!empty($data->author)){

$arr->id = $data->id;
$arr->title = $data->title;
$arr->summary = $data->summary;
$arr->content = $data->content;
$arr->author = $data->author;
$arr->image = $data->image;

if($arr->update()){
http_response_code(200);
echo json_encode(array("Note=>" => "The news updated."));
}
  else {
http_response_code(400);
echo json_encode(array("Note=>" => "The news was not updated"));
}
?>

