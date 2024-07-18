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
// print_r($data);  
// make sure data is not empty
if(1)
    
    // !empty($data->full_name) &&
    // !empty($data->father_name) &&
    // !empty($data->mobile) &&
    // !empty($data->email) &&
    // !empty($data->address1) &&
    // !empty($data->district) &&
    // !empty($data->state) &&
    // !empty($data->created_on)


{
    $reg->full_name = $data->full_name;
    $reg->father_name = $data->father_name;
    $reg->rankofr = $data->rankofr;
    $reg->name_ofkin = $data->name_ofkin;
    $reg->mobile_ofkin = $data->mobile_ofkin;
    $reg->bloodgroup = $data->bloodgroup;
    $reg->gender = $data->gender;
    $reg->dob = $data->dob;
    $reg->nearest_unit = $data->nearest_unit;
    $reg->last_unit = $data->last_unit;
    $reg->dor = $data->dor;
    $reg->status = $data->status;
    $reg->mobile = $data->mobile;
    $reg->email = $data->email;
    $reg->address1 = $data->address1;
    $reg->address2 = $data->address2;
    $reg->address3 = $data->address3;
    $reg->cor_address = $data->cor_address;
    $reg->district = $data->district;
    $reg->state = $data->state;
    $reg->pincode = $data->pincode;
    $reg->created_by = $data->created_by;
    $reg->created_on = $data->created_on;
    $reg->registration_no = $data->registration_no;
    
    //var_dump($reg);
    // create the reg
    if($reg->insert_registration()){

        http_response_code(201);
        echo json_encode(array("message" => "Successfull"));
    }
    else{
  
        // set response code - 503 service unavailable
        http_response_code(503);
  
        // tell the user
        echo json_encode(array("message" => "Unable to create registration"));
    }
}
  
// tell the user data is incomplete
else{
  
    // set response code - 400 bad request
    http_response_code(400);
  
    // tell the user
    echo json_encode(array("message" => "Unable to create registration. Data is incomplete."));
}
?>