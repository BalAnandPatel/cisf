<?php
 error_reporting(0);
  include "include/header.php";
	$url = $URL."registration/read_registration_by_status.php";
	$data = array( "status"=>"2");

  //print_r($data);
	$postdata = json_encode($data);
	$client = curl_init($url);
	curl_setopt($client,CURLOPT_RETURNTRANSFER,1);
	//curl_setopt($client, CURLOPT_POST, 5);
	curl_setopt($client, CURLOPT_POSTFIELDS, $postdata);
	$response = curl_exec($client);
  //print_r($response);
  $result = json_decode($response);
  //print_r($result);
  ?>

  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Rejected Members Details</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Members Details</li>
              <li class="breadcrumb-item active">Rejected Members Details</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
      <?php if(isset($_SESSION['registration'])) {?>
        <?php if(($_SESSION['registration']=="Payment Slip Rejected Successfully.")) {?> 
    <div class="alert alert-success" id="success-alert" role="alert">
                <?php echo $_SESSION['registration']; unset($_SESSION['registration'])?> 
               </div>
            <?php  }
            else {         
            ?>
            <div class="alert alert-danger" id="success-alert" role="alert">
                <?php echo $_SESSION['registration']; unset($_SESSION['registration'])?> 
               </div>
            <?php }} ?>
     
        <div class="row">
          <div class="col-12">
            <div class="card">
              
            </div>
            <!-- /.card -->

            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Rejected MEMBER DETAILS</h3> 
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div class="table-responsive-sm">
                <table id="example1" class="table table-bordered table-striped text-center">
                  <thead>
                  <tr>
                  <th>Sr_N.</th>
                    <th>Name</th>
                    <th>Registration</th>
                    <th>Gender</th>
                    <th>Father Name</th>
                    <th>Date of Birth</th>
                    <th>Date of Retirement</th>
                    <th>Rank OF Retirement</th>
                    <th>Mobile No.</th>
                    <th>Email id</th>
                    <th>Distric</th>
                    <th>Reg. Date</th>
                    <th>Status</th>
                  </tr>
                  	
                  </thead>
                  <tbody>
                  <?php
                  $counter = '0';
                  foreach ($result as $key => $value) {
                    foreach ($value as $key1 => $value1) {

                      $image = $ADMIN_IMG_PATH . $value1->id . "/profile/" . $value1->id . ".png";
                  ?>
                      <tr>
                        <td><?php echo ++$counter; ?></td>
                        <td><?php echo $value1->full_name; ?></td>
                        <td>
                          <form action="../user/get_final_print.php" method="post">
                            <input type="hidden" name="id" value="<?php echo $value1->id; ?>">
                            <input type="hidden" name="transaction_id" value="0">
                            <input type="hidden" name="transaction_date" value="0">
                            <button type="submit" style="text-decoration: underline;background: none;color: inherit;border: none;padding: 0;font: inherit;cursor: pointer;outline: inherit;">
                              <?php echo $value1->registration_no ?>
                            </button>
                          </form>
                        </td>
                        <td><?php echo $value1->gender ?></td>
                        <td><?php echo $value1->father_name ?></td>
                        <td><?php echo $value1->dob ?></td>
                        <td><?php echo $value1->dor ?></td>
                        <td><?php echo $value1->rank ?></td>
                        <td><?php echo $value1->mobile; ?></td>
                        <td><?php echo $value1->email ?></td>
                        <td><?php echo $value1->district ?></td>
                        <td><?php echo $value1->created_on ?></td>
                        <td><?php if ($value1->status == 0) echo "PENDING";
                            elseif ($value1->status == 1) echo "ACTIVE";
                            elseif ($value1->status == 2) echo "REJECTED"; ?></td>
                        
                      </tr>
                  <?php
                    }
                  }
                  ?>
                </tbody>                </table>
              </div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
    
  </div>

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables  & Plugins -->
<script src="plugins/datatables/jquery.dataTables.min.js"></script>
<script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="lugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="plugins/jszip/jszip.min.js"></script>
<script src="plugins/pdfmake/pdfmake.min.js"></script>
<script src="plugins/pdfmake/vfs_fonts.js"></script>
<script src="plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- Page specific script -->

<?php
include "include/footer.php";
?>