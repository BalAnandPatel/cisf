<?php
include '../../constant.php';

// if(isset($_POST["full_name"])){
$full_name=trim(strtoupper($_POST["first_name"]))." ".trim(strtoupper($_POST["last_name"]));
$father_name=strtoupper($_POST["father_name"]);
$rankofr=strtoupper($_POST["rankofr"]);
$last_unit=strtoupper($_POST["last_unit"]);
$nearest_unit=strtoupper($_POST["nearest_unit"]);
$nearest_unit=strtoupper($_POST["nearest_unit"]);
$name_ofkin=strtoupper($_POST["name_ofkin"]);
$bloodgroup=strtoupper($_POST["bloodgroup"]);
$mobile_ofkin=strtoupper($_POST["mobile_ofkin"]);
$gender=strtoupper($_POST["gender"]);
$dor= strtoupper($_POST["dor"]);
$dob= strtoupper($_POST["dob"]);
$email=$_POST["email"]; 
$mobile=$_POST["mobile"];
$address1=strtoupper($_POST["address1"]);
$address2=strtoupper($_POST["address2"]);
$address3=strtoupper($_POST["address3"]);
$cor_address=strtoupper($_POST["cor_address"]);
$district=strtoupper($_POST["district"]);
$state=strtoupper($_POST["state"]);
$pincode=$_POST["pincode"];
$created_on=date("Y-m-d H:i:s");
$created_by="USER";
$registration_no = rand(1000000000,9999999999);
$url = $URL . "registration/insert_registration.php";
$url_read_maxId=$URL . "registration/read_maxId.php";

$data = array(

  "full_name" => $full_name,
  "father_name" => $father_name,
  "bloodgroup" => $bloodgroup,
  "rankofr" => $rankofr,
  "last_unit" => $last_unit,
  "name_ofkin" => $name_ofkin,
  "dob" => $dob,
  "mobile_ofkin" => $mobile_ofkin,
  "nearest_unit" => $nearest_unit,
  "status"=>"0",
  "dor"=>$dor,
  "gender" => $gender,
  "email" => $email,
  "mobile" => $mobile, 
  "address1" => $address1, 
  "address2" => $address2, 
  "address3" => $address3,
  "cor_address"=>$cor_address,
  "district" => $district,
  "state" => $state,  
  "pincode" => $pincode,
  "created_on" => $created_on, 
  "registration_no"=>$registration_no, 
  "created_by" => $created_by);

//print_r($data);
 $postdata = json_encode($data);
//echo $url;
$result_registration=url_encode_Decode($url,$postdata);
//echo "66666666666666666666666666666666666";
//print_r($result_registration);

if($result_registration->message=="Successfull")

{

  /* --- get maximum userid -----*/

    $data_maxId=array();
    $maxId_postdata = json_encode($data_maxId);
    $result_max_registration=url_encode_Decode($url_read_maxId,$maxId_postdata);
    echo $id=$result_max_registration->records[0]->id;

         $_SESSION["registration"] = "Successfull.";
        header('Location:../registration_view.php?id='.$id);
      }
       else {
        //echo "Sorry, there was an error uploading your file.";
      
      $_SESSION["registration"] = "sorry registration is not complete.";
        //header('Location:../update_registration.php?id='.$id);
    }
     

//}

function url_encode_Decode($url,$postdata){
    $client = curl_init($url);
curl_setopt($client, CURLOPT_RETURNTRANSFER, true);
curl_setopt($client, CURLOPT_POSTFIELDS, $postdata);
$response = curl_exec($client);
//print_r($response);
return $result = json_decode($response);

}
?>