<?php
include "include/header.php";
$url = $URL . "exam/read_exam_list.php";
$data = array();
//print_r($data);
$postdata = json_encode($data);
$client = curl_init($url);
curl_setopt($client, CURLOPT_RETURNTRANSFER, 1);
//curl_setopt($client, CURLOPT_POST, 5);
curl_setopt($client, CURLOPT_POSTFIELDS, $postdata);
$response = curl_exec($client);
//print_r($response);
$result = json_decode($response);
//print_r($result);
?>
<!-- breadcrumb Wrapper Start -->
<div class="breadcrumb-wrapper">
  <div class="container">
    <div class="banner-title">
      <h2>Recruitment</h2>
      <div class="line"> <span></span></div>
    </div>
    <ul class="inner-breadcrumb">
      <li><a href="index.php">Home</a></li>
      <li>Recruitment</li>
    </ul>
  </div>
</div>
<!-- breadcrumb Wrapper End -->
<!-- Inner page Wrapper Start -->
<div class="inner-page-wrapper latest-jobs-wrapper">
  <div class="container">
      
       <!--Error Page Start-->
        <section class="text-center" style="margin-bottom: 30px">
            <div class="container">
                <?php if(isset($_SESSION['find_reg_error'])){ 
                   echo '<div class="alert alert-danger text-center" id="success-alert" role="alert">'.$_SESSION['find_reg_error'].'</div>';
                   unset($_SESSION['find_reg_error']); 
                } ?>
  
                <div class="row">
                    <div class="col-xl-4 col-md-4 col-sm-12 col-12">
                        <div class="text-success bg-light p-2">
                            <!-- <h3 class="error-page__tagline mt-5">If your paymet is faild</h3> -->
                            <span class="h5 pb-3">If Your Payment Is Failed</span>
                            <div class="">
                                <a href="#" class="btn btn-success" data-toggle="modal" data-target="#exampleModal">Pay Now<i class="icon-right-arrow"></i> </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-4 col-sm-12 col-12">
                        <div class="text-success bg-light p-2">
                            <!-- <h3 class="error-page__tagline mt-5">Get final print after payment</h3> -->
                            <span class="h5 pb-3">Know Your Registration No.</span>
                            <div class="">
                                <a href="#" class="btn btn-success" data-toggle="modal" data-target="#findRegModal">Get Registration No.<i class="icon-right-arrow"></i> </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-4 col-sm-12 col-12">
                        <div class="text-success bg-light p-2">
                            <!-- <h3 class="error-page__tagline mt-5">Get final print after payment</h3> -->
                            <span class="h5 pb-3">Get Final Print After Payment</span>
                            <div class="">
                                <a href="#" class="btn btn-success" data-toggle="modal" data-target="#printModal">Get Final Print<i class="icon-right-arrow"></i> </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- modal box start -->

        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" data-backdrop="static" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <form action="../user/payment_verify.php" method="post">
                        <div class="modal-header">
                            <p class="h3 m-auto">Payment Verification</p>
                        </div>
                        <div class="modal-body">

                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Registration No.</label>
                                <input type="number" class="form-control" name="registration_no" placeholder="Registration No." autocomplete="off" id="recipient-name" required>
                            </div>
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Mobile No.</label>
                                <input type="number" class="form-control" name="mobile" placeholder="Mobile No." id="recipient-name" autocomplete="off" required>
                            </div>

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                            <button type="submit" name="submit" class="btn btn-success">Verify</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!--  modal box end -->

        <!-- modal box start for know registration number -->

        <div class="modal fade" id="findRegModal" tabindex="-1" data-backdrop="static" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <form action="../user/find_reg_number.php" method="post">
                        <div class="modal-header">
                            <p class="h3 m-auto">Search Your Registration No.</p>
                        </div>
                        <div class="modal-body">

                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Name</label>
                                <input type="text" class="form-control" name="full_name" placeholder="Enter Your Name" autocomplete="off" id="recipient-name" required>
                            </div>
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Mobile No.</label>
                                <input type="number" class="form-control" name="mobile" placeholder="Mobile No." id="recipient-name" autocomplete="off" required>
                            </div>

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                            <button type="submit" name="submit" class="btn btn-success">Search</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!--  modal box end for know registration number-->


        <!-- modal box start for get final print -->

        <div class="modal fade" id="printModal" tabindex="-1" role="dialog" data-backdrop="static" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <form action="../user/print_verify_post.php" method="post">
                        <div class="modal-header">
                            <p class="h3 m-auto">Get Your Final Print</p>
                        </div>
                        <div class="modal-body">

                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Registration No.</label>
                                <input type="number" class="form-control" name="registration_no" placeholder="Registration No." autocomplete="off" id="recipient-name" required>
                            </div>
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Mobile No.</label>
                                <input type="number" class="form-control" name="mobile" placeholder="Mobile No." id="recipient-name" autocomplete="off" required>
                            </div>

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                            <button type="submit" name="submit" class="btn btn-success">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!--  modal box end for get final print-->


    <?php
    $counter = 0;
    foreach ($result as $key => $value) {
      foreach ($value as $key1 => $value1) {
        ?>

        <div class="single-jobs"> <i class="fa fa-users"></i>
          <div class="job-heading">
            <h3>
              <?php echo $value1->exam_name; ?>
            </h3>
            <p>Total Post -
              <?php echo $value1->total_post; ?>
            </p>
          </div>
           <div class="job-heading">
            
            <p>(Salary-
              <?php echo $value1->type; ?>)
            </p>
          </div>
          <div class="our-location color1"> <span class="fa fa-calendar" aria-hidden="true"></span>
            <div class="location-content">
              <h3>
                <?php $date = date("d M Y", strtotime($value1->exam_date_start));
                echo $date == "01-01-1970" ? '0' : $date; ?> to  <?php $date = date("d M Y", strtotime($value1->exam_date_end));
                echo $date == "01-01-1970" ? '0' : $date; ?> 
              </h3>
              <!-- <a href="#">Apply Now</a> -->
              <div class="btn">
                <form action="user/Instructions.php" method="post">
                  <input type="hidden" name="id" value="<?php echo $value1->id; ?>">
                  <input type="hidden" name="exam_name" value="<?php echo $value1->exam_name; ?>">
                  <button type="submit" name="submit" class="btn btn-success text-white">Apply</button>
                </form>
              </div>
            </div>
          </div>
        </div>

      <?php }
    } ?>

    <!-- <ul class="pagination">
      <li><a href="#"><i class="fa fa-angle-left" aria-hidden="true"></i></a></li>
      <li><a href="#">1</a></li>
      <li class="active"><a href="#">2</a></li>
      <li><a href="#">3</a></li>
      <li><a href="#">4</a></li>
      <li><a href="#">5</a></li>
      <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
    </ul> -->

  </div>
</div>
<!-- Inner page Wrapper End -->


<?php
include "include/footer.php";
?>