<?php
include '../../constant.php';
require('config.php');

// session_start();

require('razorpay-php/Razorpay.php');
use Razorpay\Api\Api;
use Razorpay\Api\Errors\SignatureVerificationError;

$success = true;

$error = "Payment Failed";

if (empty($_POST['razorpay_payment_id']) === false)
{
    $api = new Api($keyId, $keySecret);

    try
    {
        // Please note that the razorpay order ID must
        // come from a trusted source (session here, but
        // could be database or something else)
        $attributes = array(
            'razorpay_order_id' => $_SESSION['razorpay_order_id'],
            'razorpay_payment_id' => $_POST['razorpay_payment_id'],
            'razorpay_signature' => $_POST['razorpay_signature']
        );

        $api->utility->verifyPaymentSignature($attributes);
    }
    catch(SignatureVerificationError $e)
    {
        $success = false;
        $error = 'Razorpay Error : ' . $e->getMessage();
    }
}

if ($success === true)
{

    $txnId=$_POST['razorpay_payment_id'];
    $shoppingId=$_POST['shopping_order_id'];
    $orderId=$_POST['razorpay_order_id'];
    
    //  $html = "<p>Your payment was successful</p>
    //          <p>Payment ID: {$_POST['razorpay_payment_id']}</p>";
             
    
    $_SESSION['transaction_id']=$_POST['razorpay_payment_id'];
    $user_id = $_SESSION['user_id'];
    $amount = $_SESSION['amount'];
    $transaction_id = $_POST['razorpay_payment_id'];
    $status='1';
    $request_id = $_SESSION['razorpay_order_id'];
    $created_by = $_SESSION['full_name'];
    $created_on=date('Y-m-d h:i:s');
    
    $url=$URL. "payment/payment_entry.php";
    $data = array("user_id"=>$user_id,"amount"=>$amount, "transaction_id"=>$transaction_id, 
    "status"=>$status, "request_id"=>$request_id, "created_by"=>$created_by, "created_on"=>$created_on);
    
    //print_r($data);
    $postdata = json_encode($data);
    //$result=url_encode_Decode($url,$postdata);
    //print_r($result);
    
    //function url_encode_Decode($url,$postdata){
       
    $client = curl_init($url);
    curl_setopt($client, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($client, CURLOPT_POSTFIELDS, $postdata);
    $response = curl_exec($client);
    //print_r($response);
    $result = json_decode($response);
    //print_r($result);
    // return $result;
    // }
    
    $data2 = array("id"=>$user_id, "status"=> $status);
    $postdata2 = json_encode($data2);
    $url2=$URL. "registration/reg_update_approve.php";
    $client2 = curl_init($url2);
    curl_setopt($client2, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($client2, CURLOPT_POSTFIELDS, $postdata2);
    $response2 = curl_exec($client2);
    // print_r($response2);
    $result2 = json_decode($response2);
    
    $html = "Payment Successfull........";
    
    
    
    $url3 = $URL . "registration/read_profile_by_id.php";
    $data3 = array('id'=>$user_id);
    //print_r($data3);
    $postdata3 = json_encode($data3);
    $client3 = curl_init($url3);
    curl_setopt($client3, CURLOPT_RETURNTRANSFER, 1);
    //curl_setopt($client3, CURLOPT_POST, 5);
    curl_setopt($client3, CURLOPT_POSTFIELDS, $postdata3);
    $response3 = curl_exec($client3);
    //print_r($response3);
    $result3 = json_decode($response3);
    // print_r($result3);
    
    
    foreach ($result3 as $key => $value) {
      foreach ($value as $key1 => $value1) {

    if (!empty($value1->email)) {
    $headers = "From: factpahal@gmail.com \r\n";
    $headers .= "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";

    $to = trim($value1->email);
    $subject = "Your registration is successfully completed!";

    $message = "Dear <b>" . $value1->full_name . "</b> ,<br/> Welcome, <br />Your registration is successfully completed!<br/><br/>Your registration no. is " . $value1->registration_no . "<br /><br /><br />Visit us <a href='pspteam.org' target='_blank'>pspteam.org</a> to get final print. <br /><br/>Thanks <br/> PSP Team";

    mail($to,$subject,$message,$headers);
    }
    
      }}
    
    
    echo '
        <form action="reciept.php" id="yourform" method="POST">
            <input type="hidden" name="id" value="'.$user_id.'">
        </form>
    <script>            
    document.addEventListener("DOMContentLoaded", function(event) {
            document.createElement(
                "form").submit.call(document.getElementById("yourform"));
            });         
</script>
    ';
}
else
{
    $txnId=$error;
    $html = include "response/failure.php";
}

echo $html;

// echo '<script type="text/javascript">
// window.location = "https://pspteam.org/recruitment.php"
// </script>';

