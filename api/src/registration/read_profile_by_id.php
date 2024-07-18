<?php
// required headers
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
  
// database connection will be here

// include database and object files
include_once '../../config/database.php';
include_once '../../objects/registration.php';
  
// instantiate database and product object
$database = new Database();
$db = $database->getConnection();
  
// initialize object
$reg = new registration($db);
  
$data = json_decode(file_get_contents("php://input"));
// is_read products will be here
$reg->id=$data->id;

// query products
$stmt = $reg->read_profile_by_id();
$num = $stmt->rowCount();
  
// check if more than 0 record found
if($num>0){
  
    // products array
    $regs_arr=array();
    $regs_arr["records"]=array();


    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
     
        extract($row);
  
        $reg_item=array(

            "id" => $id,
       "full_name"=>$full_name,
    "father_name"=>$father_name,
    "bloodgroup"=>$bloodgroup,
    "status"=>$status,
    "gender"=>$gender,
    "rank"=>$rank,
    "dor"=>$dor,
    "dob"=>$dob,
    "name_ofkin"=>$name_ofkin,
    "mobile_ofkin"=>$mobile_ofkin,
    "mobile"=>$mobile,
    "last_unit"=>$last_unit,
    "nearest_unit"=>$nearest_unit,
    "email"=>$email,
    "address1"=>$address1,
    "address2"=>$address2,
    "address3"=>$address3,
    "cor_address"=>$cor_address,
    "district"=>$district,
    "state"=>$state,
    "pincode"=>$pincode,
    "created_by"=>$created_by,
    "created_on"=>$created_on,
    "registration_no"=>$registration_no,   
        );
  
        array_push($regs_arr["records"], $reg_item);
    }
  
    // show products data in json format
    echo json_encode($regs_arr);

     // set response code - 200 OK
     http_response_code(200);
}
  
// no products found will be here
else{
  
    // set response code - 404 Not found
    http_response_code(404);
  
    // tell the user no products found
    echo json_encode(
        array("message" => "No user found.")
    );
}
?>