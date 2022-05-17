<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

include_once '../models/_core.php';
include_once '../models/functions.php';

$database = new TheDb();
$db = $database->getConn();

$arr = new Article($db);

$data = json_decode(file_get_contents("php://input"));

if(!empty($data->title) && !empty($data->summary) &&
!empty($data->content) && !empty($data->author) &&
!empty($data->image)){

    $arr->title = $data->title;
    $arr->summary = $data->summary;
    $arr->content = $data->content;
    $arr->author = $data->author;
    $arr->image = $data->image;
    $arr->date = date('Y-m-d H:i:s');


    if($arr->add()){
        http_response_code(201);
        echo json_encode(array("Note =>" => " News"));
    }
}

else{
    http_response_code(400);
    echo json_encode(array("Note =>" => "Could not update the news"));
}
?>

