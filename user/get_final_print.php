<?php
include "../constant.php";
if(isset($_POST['transaction_id'])){

  $url = $URL . "registration/read_profile_by_id.php";
  $transaction_id = $_POST['transaction_id'];
  $t_date = $_POST['transaction_date'];
  $id = $_POST['id'];
  //$id='50';
  $data = array("id" => $id);
  $postdata1 = json_encode($data);
  $result = giplCurl($url, $postdata1);
  //print_r($result);
  
  $img = "img/" . $id . "/profile" . "/" . $id . ".png";
  $img_thumb = "img/" . $id . "/profile" . "/" . $id . "_thumb" . ".png";

}else{
header('location:print_verify_post.php');  
}


function giplCurl($api, $postdata)
{
  $url = $api;
  $client = curl_init($url);
  curl_setopt($client, CURLOPT_RETURNTRANSFER, true);
  curl_setopt($client, CURLOPT_POSTFIELDS, $postdata);
  $response = curl_exec($client);
  //print_r($response);
  return $result = json_decode($response);
}



// $url_exam = $URL . "exam/read_exam_details.php";
// $data_exam = array("exam_name" => $result->records[0]->exam_name);
// $postdata = json_encode($data_exam);
// $result_exam = giplCurl($url_exam, $postdata);
//print_r($data_exam);

// $url_payment = $URL . "payment/read_payment_details.php";
// $data_payment = array("amount" => $result_exam->records[0]->amount, "user_id" => $result->records[0]->id);
// $postdata_payment = json_encode($data_payment);
// $result_payment = giplCurl($url_payment, $postdata_payment);
// //print_r($result_payment);
// if (($result_payment->records[0]->status == 1) && ($result_payment->records[0]->amount == $result_exam->records[0]->amount)) {
//   $amount = $result_payment->records[0]->amount;
// } else {
//   $amount = 0.00;
// }

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>PSP Group</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../common/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../common/dist/css/adminlte.min.css">


</head>

<body class="container">

  <style>
    #options {
      align-content: center;
      align-items: center;
      text-align: center;
    }
  </style>

  <div class="wrapper">
    <!-- Main content -->
    <section class="invoice m-0">

      <!-- info row -->
      <div class="row invoice-info">
        <div class="col-sm-6 invoice-col text-center pt-1 d-flex justify-content-center align-items-center">
          <div class="text-center">
            <img src="../images/logo.png" height="auto" width="70px" class="img-fluid " alt="logo image">
          </div>
        </div>
        <!-- /.col -->
        <div class="col-sm-6 invoice-col text-center pt-3">
          <address class="m-0">
             <!--  -->
            <p class="m-0">Confirmation Page
            <!--<div class="btn-group" id="options">-->
              <button class="btn btn-primary btn-sm" id="printpagebutton" type="button" onclick="printpage()">Print</button>
            <!--</div>-->
            </p>
          </address>
        </div>
        <!-- /.col -->
        <!--<div class="col-sm-3  invoice-col text-center pt-1">-->
        <!--  <div class="text-center">-->
        <!--    <img src="img/logo/logo.JPG" class="img-fluid" height="auto" width="70px" alt="logo image">-->
        <!--  </div>-->
        <!--</div>-->
        <!-- /.col -->
      </div>
      <!-- /.row -->

      <!-- Table row -->
      <div class="row">

        <div class="col-11.5 table-responsive m-4">

          <table class="table table-sm table-bordered">
            <thead>
              <tr class="table-warning">
                <th scope="row">Application No : <?php echo ucfirst($result->records[0]->registration_no); ?></th>
              </tr>
            <tbody>
              <td>Retire Employee Details of CISF</td>
            </tbody>
            </thead>

          </table>
          <p class="text-success"><strong><u>Personal Details</u></strong></p>
          <table class="table table-sm table-bordered">

            <tbody>
              <?php

              foreach ($result as $key => $value) {
                foreach ($value as $key1 => $value1) {
              ?>
                  <tr>
                    <th>Candidate's Name</th>
                    <td><?php echo $value1->full_name; ?></td>
                    <th>Date of Birth</th>
                    <td><?php $date = date("d M Y", strtotime($value1->dob));
                echo $date == "01-01-1970" ? '0' : $date; ?></td>
                  </tr>
                  <tr>
                    <th>Father's Name</th>
                    <td><?php echo ucwords($value1->father_name); ?></td>
                    <th>Gender</th>
                    <td><?php echo $value1->gender; ?></td>
                  </tr>
                  <tr>
                    <th>Blood Groups</th>
                    <td><?php echo $value1->bloodgroup; ?></td>
                    <th>Date of Retirement</th>
                    <td><?php echo $value1->dor; ?></td>
                  </tr>
                  <tr>
                    <th>Rank of Retirement</th>
                    <td><?php echo $value1->rank; ?></td>
                    <th>Name of Last Unit</th>
                    <td><?php echo $value1->last_unit; ?></td>
                  </tr>
                  <tr>
                    <th>Name of Nearest Unit</th>
                    <td><?php echo $value1->nearest_unit; ?></td>
                    <th>Name of Next Kin</th>
                    <td><?php echo $value1->name_ofkin; ?></td>
                  </tr>
              <?php }
              } ?>
            </tbody>
          </table>

          <p class="text-success"><strong><u>Present Address</u></strong></p>
          <table class="table table-sm table-bordered">

            <tbody>
              <?php

              foreach ($result as $key => $value) {
                foreach ($value as $key1 => $value1) {
              ?>
                  <tr>
                    <th>Correspondance Address</th>
                    <td colspan="3"><?php echo $value1->cor_address; ?></td>
                  </tr>
                  <tr>
                    <th>Address 1</th>
                    <td colspan="3"><?php echo $value1->address1; ?></td>
                  </tr>
                  <tr>
                    <th>Address 2</th>
                    <td colspan="3"><?php echo $value1->address2; ?></td>
                  </tr>
                  <tr>
                    <th>Address 3</th>
                    <td colspan="3"><?php echo $value1->address3; ?></td>
                  </tr>
                  <tr>
                    <th>District</th>
                    <td><?php echo $value1->district; ?></td>
                    <th>State</th>
                    <td><?php echo $value1->state; ?></td>
                  </tr>
                  <tr>
                    <th>Pin Code</th>
                    <td><?php echo $value1->pincode; ?></td>
                    <th>Mobile</th>
                    <td><?php echo $value1->mobile; ?></td>
                  </tr>
                  <tr>
                    <th>Email</th>
                    <td><?php echo $value1->email; ?></td>
                    <th>Mobile No Of Kin </th>
                    <td><?php echo $value1->mobile_ofkin; ?></td>
                  </tr>
              <?php }
              } ?>
            </tbody>
          </table>

          <p class="text-success"><strong><u>Payment Details</u></strong></p>
          <table class="table table-sm table-bordered">
            <thead>
              <?php

              foreach ($result as $key => $value) {
                foreach ($value as $key1 => $value1) {
              ?>
                  <tr class="table-warning">
                    <th>Activity</th>
                    <th>Application No.</th>
                    <th>Transaction No.</th>
                    <th>Transaction Date</th>
                    <th>Amount</th>
                    <th>User ID</th>
                    <th>Paymet Mode</th>
                  </tr>
            </thead>
            <tbody>
              <tr>
                <td>Application Fee</td>
                <td><?php echo $value1->registration_no; ?></td>
                <td><?php echo $transaction_id; ?></td>
                <td>
                  <?php
                  echo $t_date;
                  ?>
                </td>
                <td><?php echo "1000"; ?></td>
                <td><?php echo "Admin" ?></td>
                <td>Online</td>
              </tr>
          <?php }
              } ?>
            </tbody>
          </table>

        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

    </section>
    <!-- /.content -->
  </div>
  <!-- ./wrapper -->
  <!-- Page specific script -->
  <script>
    function printpage() {
      //Get the print button and put it into a variable
      var printButton = document.getElementById("printpagebutton");
      //Set the print button visibility to 'hidden' 
      printButton.style.visibility = 'hidden';
      //Print the page content
      window.print()
      printButton.style.visibility = 'visible';
    }
  </script>
  <!--
<script>
  window.addEventListener("load", window.print());
</script>-->
</body>

</html>