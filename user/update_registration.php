<?php
//This page is used by admin to view the login details of created agents.
include '../constant.php';
$id=$_POST['id'];

$url = $URL ."registration/read_profile_by_id.php";

$data=array("id"=>$id);
$postdata1 = json_encode($data);
$results=giplCurl($url,$postdata1);
//print_r($results);
function giplCurl($api,$postdata){
    $url = $api; 
      $client = curl_init($url);
      curl_setopt($client,CURLOPT_RETURNTRANSFER,true);
      curl_setopt($client, CURLOPT_POSTFIELDS, $postdata);
      $response = curl_exec($client);
    //  print_r($response);
      return  json_decode($response);
  }
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
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="../common/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../common/dist/css/adminlte.min.css">
  <link rel="stylesheet" href="../common/build/scss/pages/_login_and_register.scss">
  <link rel="stylesheet" href="../common/build/scss/pages/_profile.scss">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">


</head>
<style>
  .card{
    padding: 20px;
    border-top: 3px solid green;
}
  body{
    background-color: #E9ECEF;
  }
</style>
<body class="hold-transition">
<!-- <div class="register-box">
  <div class="register-logo">
    <a href="#"><b>REGISTRATION</b></a>
  </div>
  <div class="card">
    <div class="card-body register-card-body">
       -->

       <br>
    <div class="container">

    <h1 align="center" class="register-logo">
    <a href="#"><b>REGISTRATION</b></a>
  </h1>

  <br>

    <div class="row align-items-start card">
      
      
      
      <h2 class="login-box-msg"><b><u>Update Details</u></b></h2>
      <hr>
     
              <!-- form start -->
             <hr>
             <form action="action/update_registration_post.php" method="post" enctype="multipart/form-data">
                <div class="card-body">

                <?php 
								     
                     foreach($results as $key => $value){
                     foreach($value as $key1 => $value1)
                      {
                    ?>

      <div class="container-fluid">

  <div class="row">
    
         
            <div class="col-sm-6">
               <div class="form-group">
  <label for="input">Full Name </label>

          <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-user"></span>
              </div>
              <input type="text" class="form-control" value="<?php echo $value1->full_name ?>"  placeholder="Full Name " name="full_name" autocomplete="off" required>         
          
          </div>
          </div>
            </div>
            <div class="col-sm-6">
               <div class="form-group">
  <label for="input">Father Name </label>

          <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-user"></span>
              </div>
              <input type="text" class="form-control" value="<?php echo $value1->father_name ?>"  placeholder="Full Name " name="full_name" autocomplete="off" required>         
          
          </div>
          </div>
            </div>
            </div>
 
  <div class="row">
          <div class="col-sm-6">
          <div class="form-group">
  <label for="input">Date of Retirment</label>

          <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-calendar"></span>
              </div>
            <input type="datedepart" class="form-control" value=<?php echo $value1->dor; ?>  name="dor"  placeholder="Date Of Retirment"  autocomplete="off" required>         

            </div>
          </div>
            </div>

            <div class="col-sm-6">
               <div class="form-group">
  <label for="input">Dob </label>

          <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-user"></span>
              </div>
            <input type="text" class="form-control"  value="<?php echo $value1->dob ?>" name="dob"  placeholder="dob" autocomplete="off" required>         
          </div>
          </div>
            </div>
            </div>
            <div class="row">
          <div class="col-sm-6">
          <div class="form-group">
  <label for="input">Name of The Next Kin</label>

          <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-calendar"></span>
              </div>
            <input type="datedepart" class="form-control" value="<?php echo $value1->name_ofkin ?>"  name="name_ofkin"  placeholder="Name of The Next Kin"  autocomplete="off" required>         

            </div>
          </div>
            </div>

            <div class="col-sm-6">
               <div class="form-group">
  <label for="input">Kin Mobile no </label>

          <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-user"></span>
              </div>
            <input type="text" class="form-control"  value="<?php echo $value1->dob ?>" name="dob"  placeholder="dob" autocomplete="off" required>         
          </div>
          </div>
            </div>
            </div>

            <div class="row">

    
      

           
            </div>

            <div class="row">

    
          <div class="col-sm-6">
          <div class="form-group">
  <label for="input">Rank Held at The Time Retirement
  </label>

          <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-user"></span>
              </div>
               <input type="text" class="form-control"  placeholder="Rank Held at The Time Retirement" name="rank"   value="<?php echo $value1->rank ?>" autocomplete="off" required>         
                    </div>
          </div>
            </div>

            <div class="col-sm-6">
               <div class="form-group">
  <label for="input">Blood Group </label>

          <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-user"></span>
              </div>
               <input type="text" class="form-control"  placeholder="Bood Group" name="boodgroup"   value="<?php echo $value1->bloodgroup ?>" autocomplete="off" required>         
                    
          </div>
          </div>
            </div>
            </div>
            

            <div class="row">
          <div class="col-sm-6">
          <div class="form-group">
  <label for="input">Email</label>

          <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-envelope"></span>
              </div>

               <input type="text" class="form-control"  placeholder="Email" name="email"   value="<?php echo $value1->email ?>" autocomplete="off" required>         
        
         
            </div>
          </div>
            </div>

            <div class="col-sm-6">
               <div class="form-group">
  <label for="input">Mobile</label>

          <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-phone"></span>
              </div>
               <input type="text" class="form-control"  placeholder="Mobile" name="mobile"   value="<?php echo $value1->mobile ?>" autocomplete="off" required>         

         
            </div>
          </div>
            </div>
            </div>



            <div class="row">
          <div class="col-sm-6">
          <div class="form-group">
  <label for="input">Correspondance Address </label>

          <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-home"></span>
              </div>
               <input type="text" class="form-control"  placeholder="Correspondance Address" name="cor_address"   value="<?php echo $value1->cor_address ?>" autocomplete="off" required>         
              
            </div>
          </div>
            </div>

            <div class="col-sm-6">
               <div class="form-group">
  <label for="input">Address 1</label>

          <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-home"></span>
              </div>
               <input type="text" class="form-control"  placeholder="Address 1" name="address1"   value="<?php echo $value1->address1 ?>" autocomplete="off" required>         
         
            </div>
          </div>
            </div>
            </div>

            <div class="row">
          <div class="col-sm-6">
          <div class="form-group">
  <label for="input">Address 2</label>

          <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-home"></span>
              </div>
               <input type="text" class="form-control"  placeholder="Address 2" name="address2"   value="<?php echo $value1->address2 ?>" autocomplete="off" required>         
            </div>
          </div>
            </div>

            <div class="col-sm-6">
               <div class="form-group">
  <label for="input">Block</label>

          <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-home"></span>
              </div>
               <input type="text" class="form-control"  placeholder="Block" name="address3"   value="<?php echo $value1->address3 ?>" autocomplete="off" required>         
       
            </div>
          </div>
            </div>
            </div>

            <div class="row">
  <!-- <div class="col-sm-12"> -->
    
          <div class="col-sm-6">
          <div class="form-group">
  <label for="input">District </label>

          <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-map-pin"></span>
              </div>
               <input type="text" class="form-control"  placeholder="District" name="district"   value="<?php echo $value1->district ?>" autocomplete="off" required>                  
            </div>
          </div>
            </div>

            <div class="col-sm-6">
               <div class="form-group">
  <label for="input">Pincode</label>

          <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-map-pin"></span>
              </div>
               <input type="text" class="form-control"  placeholder="Pincode"  name="pincode"  value="<?php echo $value1->pincode ?>" autocomplete="off" required>                  

             
            </div>
          </div>
            </div>
            </div>


            
            <div class="row">
  <!-- <div class="col-sm-12"> -->
    
          <div class="col-sm-6">
          <div class="form-group">
  <label for="input">State </label>

          <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-map-pin"></span>
              </div>
              
               <input type="text" class="form-control"  placeholder="State" name="state"   value="<?php echo $value1->state ?>" autocomplete="off" required>                  
         
            </div>
          </div>
            </div>

            <div class="col-sm-6">
               <div class="form-group">
  <label for="input">Gender</label>

          <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-flag"></span>
              </div>
               <input type="text" class="form-control"  placeholder="Nationality" name="nationality"   value="<?php echo $value1->gender ?>" autocomplete="off" required>                  
            
          
            </div>
          </div>
            </div>

            </div>
            
           

          





        




      
      






<div class="row">    
          <div class="col-sm-4">

          
          </div>
 
          <div class="col-sm-4">
          
            <input type="hidden" name="id" value="<?php echo $value1->id ?>" >
            
            <input type="hidden" name="registration_no" value="<?php echo $value1->registration_no ?>" >

            <button type="submit" class="btn btn-success btn-block">Update</button>
        
          </div>
          <!-- /.col -->
        </div>
                </div>
               
      </div>

      <?php 
                
              }
              }?>
             </form>

             <!-- <div class="col-sm-4">
 <form action="registration_view.php" method="post" enctype="multipart/form-data">
          <input type="hidden" name="id" value="<?php echo $value1->id ?>" >
            
            <input type="hidden" name="registration_no" value="<?php echo $value1->registration_no ?>" >

            <button type="submit" class="btn btn-warning btn-block">GO BACK</button>
        
 </form> 
          </div> -->

    <!-- /.form-box -->
  </div><!-- /.card -->
</div>
<!-- /.register-box -->

<!-- jQuery -->
<script src="../common/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../common/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../common/dist/js/adminlte.min.js"></script>
</body>
</html>