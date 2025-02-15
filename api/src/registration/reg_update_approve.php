<?php
// required headers
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
  
// get database connection
include_once '../../config/database.php';
  
// instantiate reg object
include_once '../../objects/registration.php';
  
$database = new Database();
$db = $database->getConnection();
  
$reg = new registration($db);
  
// get posted data
$data = json_decode(file_get_contents("php://input"));
// var_dump($data);  
// mavarke sure data is not empty
if(
    
    // !empty($data->registration_no) &&
    !empty($data->id) &&
    !empty($data->status) 

)

{
    $reg->id=$data->id;
    // $reg->registration_no = $data->registration_no;
    $reg->status = $data->status;
   

    if($reg->reg_update_approve()){
  
        // set response code - 201 created
        http_response_code(201);
  
        // tell the user
        echo json_encode(array("message" => "Successfull"));
    }
  
    // if unable to create the reg, tell the user
    else{
  
        // set response code - 503 service unavailable
        http_response_code(503);
  
        // tell the user
        echo json_encode(array("message" => "Unable to update registration"));
    }
}
  
// tell the user data is incomplete
else{
  
    // set response code - 400 bad request
    http_response_code(400);
  
    // tell the user
    echo json_encode(array("message" => "Unable to update registration. Data is incomplete."));
}
?>