<?php

if (isset($_POST['delete'])) {

  include "../../constant.php";

  $id = $_POST['id'];

  $folder1 = "../image/notification_pdf/" . $id;
  $folder = "../image/notification_pdf/" . $id . "/pdf/";
  $file = "../image/notification_pdf/" . $id . "/pdf/" . $id . ".pdf";

  $url = $URL . "notification/delete_notification.php";

  $data = array('id' => $id);
  //print_r($data);

  $postdata = json_encode($data);
  $client = curl_init($url);
  curl_setopt($client, CURLOPT_POSTFIELDS, $postdata);
  curl_setopt($client, CURLOPT_RETURNTRANSFER, true);
  $response = curl_exec($client);
  //print_r($response);    
  $result = json_decode($response);
  //print_r($result);

  if ($result->message == "Record has been deleted.") {

    unlink($file);
    rmdir($folder);
    rmdir($folder1);
    $_SESSION["notification_delete_success"] = "Successfully Deleted";

  } else {
    header('location:../notification_list.php');
  }

  header('location:../notification_list.php');

}

?>