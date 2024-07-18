<?php
include '../constant.php';

// if(isset($_POST["submit"])){
// $exam_name = $_POST['exam_name'];
// }else{
//   header('location:Instructions.php');
//   }
?> <script>
  function getFileData(object) {
    //alert("Hello");
    var file = object.files[0];
    var name = file.name; //you can set the name to the paragraph id 
    document.getElementById('selectedFile').innerHTML = name; //set name using core javascript
    // alert(name);
  }

  function getFileThumbData(object) {
    //alert("Hello");
    var file = object.files[0];
    var name = file.name; //you can set the name to the paragraph id 
    document.getElementById('selectedFileThumb').innerHTML = name; //set name using core javascript
    // alert(name);
  }
</script>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Ex CISF Personnel Welfare Association</title>
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../common/plugins/fontawesome-free/css/all.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="../common/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../common/dist/css/adminlte.min.css">
    <link rel="stylesheet" href="../common/build/scss/pages/_login_and_register.scss">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
  </head>
  <style>
    .card {
      padding: 20px;
      border-top: 3px solid green;
    }

    body {
      background-color: #E9ECEF;
    }

    @media (max-width: 600px) {
      .d-xs-block {
        display: block !important;
      }
    }
  </style>
  <body class="hold-transition">
    <!-- <div class="register-box"><div class="register-logo mb-3"><a href="#"><b>REGISTRATION</b></a></div><div class="card card-success card-outline"><div class="card-body register-card-body"> -->
    <br>
    <div class="container">
      <!-- <center><div class="container d-flex d-xs-block justify-content-center my-2"><img src="../website/assets/images/logo/logoSmall.png" class="img-fluid mx-3" alt=""><div><h4>SHYAMAVSVSS KRISHI LIMITED</h4><p><b>CIN - U01100UP2022PLC170775</b><br><b>WEBSITE - https://krishilimited.com/</b><br><b>Mobile No - 7307145971</b></p></div></div></center><hr class="color:red;"> -->
      <h1 align="center" class="register-logo">
        <a href="#">
          <b>Ex CISF Personnel Welfare Association Registration Form</b>
        </a>
      </h1>
      <h1 class="text-center">
        <a href="../index.php">
          <button class="btn btn-primary">Back</button>
        </a>
      </h1>
      <br>
      <div class="row align-items-start card">
        <h2 class="login-box-msg">
          <u>Reg.No DISTT. SHAHDARA/OFFLINE/102/2024 DATED 30/01/2024</u>
        </h2>
        <!-- <p class="login-box-msg"><a href="index.php"><b class="login-box-msg">Alreadr Register? Please Login.</b></a></p> -->
        <hr>
        <form action="action/registration_post.php" method="post" enctype="multipart/form-data">
          <div class="container-fluid">
            <div class="row">
              <div class="col-sm-12 col-md-6">
                <div class="form-group">
                  <label for="input">First Name </label>
                  <div class="input-group-append">
                    <div class="input-group-text">
                      <span class="fas fa-boxes"></span>
                    </div>
                    <input type="text" class="form-control" placeholder="First Name" name="first_name" autocomplete="off" required data-toggle="tooltip" title="Please Enter Full Name">
                  </div>
                </div>
              </div>
              <div class="col-sm-12 col-md-6">
                <div class="form-group">
                  <label for="input">Last Name </label>
                  <div class="input-group-append">
                    <div class="input-group-text">
                      <span class="fas fa-boxes"></span>
                    </div>
                    <input type="text" class="form-control" placeholder="Last Name" name="last_name" autocomplete="off" required data-toggle="tooltip" title="Please Enter Full Name">
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-12 col-md-6">
                <div class="form-group">
                  <label for="input">Blood Group</label>
                  <div class="input-group-append">
                    <div class="input-group-text">
                      <span class="fas fa-boxes"></span>
                    </div>
                    <select class="form-control" name="bloodgroup" required>
                      <option class="form-control" value="">Please Select Bood Group</option>
                      <option class="form-control" value="O-">O-</option>
                      <option class="form-control" value="O+">O+</option>
                      <option class="form-control" value="A+">A-</option>
                      <option class="form-control" value="A+">A+</option>
                      <option class="form-control" value="B+">B+</option>
                      <option class="form-control" value="B-">B-</option>
                      <option class="form-control" value="AB+">AB+</option>
                      <option class="form-control" value="AB-">AB-</option>
                    </select>
                  </div>
                </div>
              </div>
              <div class="col-sm-12 col-md-6">
                <div class="form-group">
                  <label for="input">Father/Husband Name </label>
                  <div class="input-group-append">
                    <div class="input-group-text">
                      <span class="fas fa-user"></span>
                    </div>
                    <input type="text" class="form-control" placeholder="Father Name." name="father_name" autocomplete="off" data-toggle="tooltip" title="Please Enter your father name">
                  </div>
                </div>
              </div>
            </div>
            
            <div class="row">
            <div class="col-sm-12 col-md-6">
                <div class="form-group">
                  <label for="input">D.O.B</label>
                  <div class="input-group-append">
                    <div class="input-group-text">
                      <span class="fas fa-user"></span>
                    </div>
                    <input class="form-control" type="date" placeholder="dd-mm-yyyy" name="dob" autocomplete="off" required data-toggle="tooltip" title="Please Enter Date of Birth">
                  </div>
                </div>
              </div>
              <div class="col-sm-12 col-md-6">
                <div class="form-group">
                  <label for="input">Gender</label>
                  <div class="input-group-append">
                    <div class="input-group-text">
                      <span class="fas fa-boxes"></span>
                    </div>
                    <!-- <input type="text" class="form-control" placeholder="Category" name="category" autocomplete="off" required  data-toggle="tooltip" title="Please Enter Category Name">          -->
                    <select class="form-control" name="gender" required>
                      <option class="form-control" value="">Please Select Gender</option>
                      <option class="form-control" value="male">Male</option>
                      <option class="form-control" value="female">Female</option>
                    </select>
                  </div>
                </div>
              </div>
              </div>
            <div class="row">
              <div class="col-sm-12 col-md-6">
                <div class="form-group">
                  <label for="input">Date of Retirement From CISF (dd-mm-yyyy)</label>
                  <div class="input-group-append">
                    <div class="input-group-text">
                      <span class="fas fa-boxes"></span>
                    </div>
                    <input class="form-control" type="date" placeholder="dd-mm-yyyy" name="dor" autocomplete="off" required data-toggle="tooltip" title="Please Enter Date of Retirement">
                  </div>
                </div>
              </div>
              <div class="col-sm-12 col-md-6">
                <div class="form-group">
                  <label for="input">Rank Held at The Time Retirement </label>
                  <div class="input-group-append">
                    <div class="input-group-text">
                      <span class="fas fa-user"></span>
                    </div>
                    <select class="form-control" name="rankofr" required>
                      <option class="form-control" value="0">Please Select Your Rank</option>
                      <option class="form-control" value="DG">DG</option>
                      <option class="form-control" value="ADG">ADG</option>
                      <option class="form-control" value="IG">IG</option>
                      <option class="form-control" value="DIG">DIG</option>
                      <option class="form-control" value="SrCO">SrCO</option>
                      <option class="form-control" value="CO">CO</option>
                      <option class="form-control" value="DC">DC</option>
                      <option class="form-control" value="AC">AC</option>
                      <option class="form-control" value="INSPECTOR">INSPECTOR</option>
                      <option class="form-control" value="SI">SI</option>
                      <option class="form-control" value="ASI">ASI</option>
                      <option class="form-control" value="HC">HC</option>
                      <option class="form-control" value="CONSTABLE">CONSTABLE</option>
                    </select>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-12 col-md-6">
                <div class="form-group">
                  <label for="input">Name of Last Unit </label>
                  <div class="input-group-append">
                    <div class="input-group-text">
                      <span class="fas fa-user"></span>
                    </div>
                    <input type="text" class="form-control" placeholder="Name of Last Unit" name="last_unit" autocomplete="off" data-toggle="tooltip" title="Please Enter Spouse Name">
                  </div>
                </div>
              </div>
              <div class="col-sm-12 col-md-6">
                <div class="form-group">
                  <label for="input">Name of Nearest Unit </label>
                  <div class="input-group-append">
                    <div class="input-group-text">
                      <span class="fas fa-user"></span>
                    </div>
                    <input type="text" class="form-control" placeholder="Name of Nearest Unit
" name="nearest_unit" autocomplete="off" data-toggle="tooltip" title="Please Enter Spouse Name">
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-12 col-md-6">
                <div class="form-group">
                  <label for="input">Email</label>
                  <div class="input-group-append">
                    <div class="input-group-text">
                      <span class="fas fa-envelope"></span>
                    </div>
                    <input type="email" class="form-control" placeholder="Email" name="email" autocomplete="off" required data-toggle="tooltip" title="Please Enter Email">
                  </div>
                </div>
              </div>
              <div class="col-sm-12 col-md-6">
                <div class="form-group">
                  <label for="input">Mobile</label>
                  <div class="input-group-append">
                    <div class="input-group-text">
                      <span class="fas fa-phone"></span>
                    </div>
                    <input type="text" class="form-control" placeholder="Mobile No." name="mobile" autocomplete="off" required data-toggle="tooltip" title="Please Enter Phone Number">
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-12 col-md-6">
                <div class="form-group">
                  <label for="input">House No. & Floor </label>
                  <div class="input-group-append">
                    <div class="input-group-text">
                      <span class="fas fa-boxes"></span>
                    </div>
                    <input type="text" class="form-control" placeholder="Correspondance Address" name="cor_address" autocomplete="off" required data-toggle="tooltip" title="Please Enter Correspondance Address">
                  </div>
                </div>
              </div>
              <div class="col-sm-12 col-md-6">
                <div class="form-group">
                  <label for="input">Lane/Gali</label>
                  <div class="input-group-append">
                    <div class="input-group-text">
                      <span class="fas fa-boxes"></span>
                    </div>
                    <input type="text" class="form-control" placeholder="Address 1" name="address1" autocomplete="off" required data-toggle="tooltip" title="Please Enter Address 1">
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-12 col-md-6">
                <div class="form-group">
                  <label for="input">Post Office</label>
                  <div class="input-group-append">
                    <div class="input-group-text">
                      <span class="fas fa-boxes"></span>
                    </div>
                    <input type="text" class="form-control" placeholder="Address 2" name="address2" autocomplete="off" required data-toggle="tooltip" title="Please Enter Address">
                  </div>
                </div>
              </div>
              <div class="col-sm-12 col-md-6">
                <div class="form-group">
                  <label for="input">Tehshil</label>
                  <div class="input-group-append">
                    <div class="input-group-text">
                      <span class="fas fa-boxes"></span>
                    </div>
                    <input type="text" class="form-control" placeholder="Address 3" name="address3" autocomplete="off" required data-toggle="tooltip" title="Please Enter Block">
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <!-- <div class="col-sm-12"> -->
              <div class="col-sm-12 col-md-6">
                <div class="form-group">
                  <label for="input">District </label>
                  <div class="input-group-append">
                    <div class="input-group-text">
                      <span class="fas fa-map-pin"></span>
                    </div>
                    <input type="text" class="form-control" placeholder="District" name="district" autocomplete="off" required data-toggle="tooltip" title="Please Enter District Name">
                  </div>
                </div>
              </div>
              <div class="col-sm-12 col-md-6">
                <div class="form-group">
                  <label for="input">Pincode</label>
                  <div class="input-group-append">
                    <div class="input-group-text">
                      <span class="fas fa-boxes"></span>
                    </div>
                    <input type="text" class="form-control" placeholder="Pincode" name="pincode" autocomplete="off" required data-toggle="tooltip" title="Please Enter Pincode">
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <!-- <div class="col-sm-12"> -->
              <div class="col-sm-12 col-md-6">
                <div class="form-group">
                  <label for="input">State </label>
                  <div class="input-group-append">
                    <div class="input-group-text">
                      <span class="fas fa-boxes"></span>
                    </div>
                    <input type="text" class="form-control" placeholder="State" name="state" autocomplete="off" required data-toggle="tooltip" title="Please Enter State Name">
                  </div>
                </div>
              </div>
              <div class="col-sm-12 col-md-6">
                <div class="form-group">
                  <label for="input">Name of Next of Kin </label>
                  <div class="input-group-append">
                    <div class="input-group-text">
                      <span class="fas fa-user"></span>
                    </div>
                    <input type="text" class="form-control" placeholder="Name of Next Kin" name="name_ofkin" autocomplete="off" data-toggle="tooltip" title="Please Enter Spouse">
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-12 col-md-6">
                <div class="form-group">
                  <label for="input">Mobile no of Kin </label>
                  <div class="input-group-append">
                    <div class="input-group-text">
                      <span class="fas fa-user"></span>
                    </div>
                    <input type="text" class="form-control" placeholder="Mobile no of Kin" name="mobile_ofkin" autocomplete="off" data-toggle="tooltip" title="Please Enter Spouse Name">
                  </div>
                </div>
              </div>
            <div class="row d-flex justify-content-center">
              <div class="col-6">
                <button type="submit" class="btn btn-success btn-block">Register</button>
              </div>
            </div>
            <!-- /.col -->
          </div>
      </div>
      </form>
      <!-- /.form-box -->
    </div>
    <!-- /.card -->
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