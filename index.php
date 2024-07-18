<?php
include "include/header.php";
$url = $URL . "notification/read_notification.php";
$data = array();
//print_r($data);
$postdata = json_encode($data);
$client = curl_init($url);
curl_setopt($client, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($client, CURLOPT_POSTFIELDS, $postdata);
$response = curl_exec($client);
//print_r($response);
$result = json_decode($response);
//print_r($result);
?>

<!-- The modal -->
<script type="text/javascript">
    // $(window).on('load', function() {
    //     $('#basicModal').modal('show');
    //     // $('#basicModal').addClass('show');
    //     $('#basicModal').addClass('in');
    // });
 </script>
<!--<div class="modal fade" id="basicModal" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">-->
<!--    <div class="modal-dialog">-->
<!--        <div class="modal-content">-->
<!--            <div class="modal-header">-->
<!--                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>-->
<!--            </div>-->
<!--            <div class="modal-body">-->
<!--                <img src="images/media/Notice.jpg" id="modal_image" class="img-responsive" alt="modal_image" />-->
<!--            </div>-->
<!--            <div class="modal-footer">-->
<!--              <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->


 
<!-- Banner Wrapper Start -->
<div class="banner-wrapper">
  <div class="carousel fade-carousel slide" data-ride="carousel" data-interval="4000" id="bs-carousel">
    <!-- Overlay -->
    <div class="overlay"></div>
    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item slides active">
        <div class="slide-1"><img src="images/media/banner-1.jpg" alt="Slider" width="100%" /></div>
        <!-- <div class="hero">
          <h1>We offer <span>1,259</span> job vacancies right now!</h1>
          <p>Find your desire one in a minute</p>
        </div> -->
      </div>
      <div class="item slides">
        <div class="slide-2"><img src="images/media/banner-2.jpg" alt="Slider" width="100%" /></div>
        <!-- <div class="hero">
          <h1>We offer <span>1,259</span> job vacancies right now!</h1>
          <p>Find your desire one in a minute</p>
        </div> -->
      </div>
      <div class="item slides">
        <div class="slide-3"><img src="images/media/banner-4.jpg" alt="Slider" width="100%" /></div>
        <!-- <div class="hero"> -->
      <!--    <h1>We offer <span>1,259</span> job vacancies right now!</h1>-->
      <!--    <p>Find your desire one in a minute</p>-->
      <!--  </div> -->
      </div>
    </div>
    <div class="slide-arrows"><a class="left carousel-control" href="#bs-carousel" data-slide="prev"><span
          class="transition3s glyphicon glyphicon-chevron-left fa fa-angle-left"></span></a> <a
        class="right carousel-control" href="#bs-carousel" data-slide="next"><span
          class="transition3s glyphicon glyphicon-chevron-right fa fa-angle-right"></span></a></div>
  </div>
</div>
<!-- Banner Wrapper End -->
<!-- Professional Search Start -->
<!-- <div class="professional-search">
  <div class="container">
    <div class="search-bg">
      <h2>Search For Professionals</h2>
      <div class="form">
        <div class="form-group">
          <input class="form-control" id="professionals" placeholder="All Professionals" type="text">
        </div>
        <div class="form-group">
          <input class="form-control" id="anylocation" placeholder="Any Location" type="text">
        </div>
        <div class="form-group">
          <select id="selectLocation" class="form-control">
            <option>ALL Service</option>
            <option>ALL Service1</option>
            <option>ALL Service2</option>
            <option>ALL Service3</option>
            <option>ALL Service4</option>
            <option>ALL Service5</option>
            <option>ALL Service6</option>
          </select>
        </div>
        <button type="submit" class="btn btn-primary"><i class="fa fa-search" aria-hidden="true"></i></button>
      </div>
    </div>
  </div>
</div> -->
<!-- Professional Search End -->
<!-- Callout Wrapper Start -->
<!-- <div class="callouts-wrapper">
  <div class="container">
    <div class="title">
      <h2>We Can Help You <span>Get A Job</span></h2>
      <h3>If the job is online, you will find it on RecruitePro</h3>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-md-3 col-sm-6">
        <div class="callouts"> <span class="icon"><img src="images/icon1.png" alt=""></span>
          <h3>Accounting / Finance</h3>
        </div>
      </div>
      <div class="col-md-3 col-sm-6">
        <div class="callouts"> <span class="icon"><img src="images/icon2.png" alt=""></span>
          <h3>Automotive Jobs</h3>
        </div>
      </div>
      <div class="col-md-3 col-sm-6">
        <div class="callouts"> <span class="icon"><img src="images/icon3.png" alt=""></span>
          <h3>Construction / Facilities</h3>
        </div>
      </div>
      <div class="col-md-3 col-sm-6">
        <div class="callouts"> <span class="icon"><img src="images/icon4.png" alt=""></span>
          <h3>Education Training</h3>
        </div>
      </div>
      <div class="col-md-3 col-sm-6">
        <div class="callouts"> <span class="icon"><img src="images/icon5.png" alt=""></span>
          <h3>Healthcare</h3>
        </div>
      </div>
      <div class="col-md-3 col-sm-6">
        <div class="callouts"> <span class="icon"><img src="images/icon6.png" alt=""></span>
          <h3>Restaurant / Food Service</h3>
        </div>
      </div>
      <div class="col-md-3 col-sm-6">
        <div class="callouts"> <span class="icon"><img src="images/icon7.png" alt=""></span>
          <h3>Transportation / Logistics</h3>
        </div>
      </div>
      <div class="col-md-3 col-sm-6">
        <div class="callouts"> <span class="icon"><img src="images/icon8.png" alt=""></span>
          <h3>Telecommunications</h3>
        </div>
      </div>
    </div>
    <a href="#" class="btn-one">Browse All Categories</a> </div>
</div> -->
<!-- Callout Wrapper End -->
<!-- Our counters -->
<!-- <div class="counters">
  <div class="container">
    <div class="row">
      <div class="col-sm-4">
        <div class="counter">
          <div class="counter-icon-box"><img src="images/counter-icon1.png" alt=""></div>
          <div class="counter-right">
            <div class="number animateNumber" data-num="80000"> <span>80000</span></div>
            <p>Registered Members</p>
          </div>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="counter">
          <div class="counter-icon-box"><img src="images/counter-icon2.png" alt=""></div>
          <div class="counter-right">
            <div class="number animateNumber" data-num="90000"> <span>90000</span></div>
            <p>Total Jobs Posted</p>
          </div>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="counter last">
          <div class="counter-icon-box"><img src="images/counter-icon3.png" alt=""></div>
          <div class="counter-right">
            <div class="number animateNumber" data-num="54127"> <span>54127</span></div>
            <p>Awesome Company</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div> -->
<!-- Our counters End -->
<!-- Latest jobs Wrapper Start -->
<div class="latest-jobs-wrapper">
  <div class="container">
    <div class="title">
      <h2>Latest <span>Notifications</span></h2>
      <!-- <h3>Here you can see</h3> -->
    </div>
  </div>
  <div class="container">

  <div class="notification-panel" style="height: 400px; overflow: scroll; padding: 0 25px;">
    <?php
    $counter = 0;
    foreach ($result as $key => $value) {
      foreach ($value as $key1 => $value1) {
        $pdf_path = "admin/image/notification_pdf/" . $value1->id . "/pdf/" . $value1->id . ".pdf";
        ?>

        <div class="single-jobs"> <i class="fa fa-bell" aria-hidden="true" style="color:red;border: 2px solid black; border-radius: 50%;"></i>
          <div class="job-heading">
            <h3>
              <?php echo $value1->n_title; ?>
            </h3>
            <!-- <p>Datebase Management Company, Permanent - New York</p> -->
          </div>
          <div class="our-location color2">
            <!-- <span class="fa fa-map-marker" aria-hidden="true"></span> -->
            <div class="location-content">
              <!-- <h3>Menlo park, CA</h3> -->
              <a href="<?php echo $pdf_path; ?>" target="_blank"><span>View PDF</span></a>
            </div>
          </div>
        </div>

      <?php }
    } ?>
      </div>


  </div>
</div>
<!-- Latest jobs Wrapper End -->
<!-- Video Wrapper Start -->
<div class="video-wrapper">
  <div class="container">
    <div class="title">
      <h2>Watch Our Video</h2>
      <h3>Here you can see</h3>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-sm-8 col-sm-offset-2 col-xs-offset-0">
        <p> All personnel retired from CISF including Voluntary retired. Personnel dismissed,removed, Compulsory Retired would not be entitled.

Any member who served in CISF for five years and presently not in service in CISF.

Spouse of any deceased members.

Any member who found worthy for association subject to approval of  Executive  committee from time to time.

Members to pay membership fee.

Life time fee Rs 1000 (One Time)
Or
Annual fee Rs.100 ( Every Year)
Detailed description available in Bylaws.

 To follow association rules,regulations, instructions issued time to time as a bonafide member.
        </p>
        <a href="https://www.youtube.com/@saralpahal" class="btn btn-default" data-popup="video">
          <i class="fa fa-play"></i>
        </a>
      </div>
    </div>
  </div>
</div>
<!-- Video Wrapper End -->
<!-- Popular Search Wrapper Start -->
<!-- <div class="popular-search-wrapper">
  <div class="container">
    <div class="title">
      <h2>Popular <span>Searches</span></h2>
      <h3>Here you can see</h3>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-md-5 col-sm-12">
        <div class="browse-category">
          <h3>BROWSE BY CATEGORIES</h3>
          <ul>
            <li>Marketing (174)</li>
            <li>Engineering (174)</li>
          </ul>
          <ul>
            <li>Teaching & Education (174)</li>
            <li>Software & Web (174)</li>
          </ul>
          <ul>
            <li>Writing (174)</li>
            <li>Sales & BD (174)</li>
          </ul>
          <ul>
            <li>Telemarketing (174)</li>
            <li>Customer Service (174)</li>
          </ul>
          <ul>
            <li>Administration (174)</li>
            <li>Creative Design (174)</li>
          </ul>
          <ul>
            <li>Creative Design (174)</li>
            <li>Accounts & Finance (174)</li>
          </ul>
          <ul class="last">
            <li>SEO (174)</li>
            <li>Web Design (174)</li>
          </ul>
        </div>
      </div>
      <div class="col-sm-2 hidden-xs hidden-sm">
        <div class="popular-search-img"><img src="images/popular-search-img.png" alt=""></div>
      </div>
      <div class="col-md-5 col-sm-12">
        <div class="browse-city">
          <h3>BROWSE BY CITIES</h3>
          <ul>
            <li>New York</li>
            <li>Bessemer</li>
            <li>Dothan</li>
          </ul>
          <ul>
            <li>Alexander City</li>
            <li>Birmingham</li>
            <li>Enterprise</li>
          </ul>
          <ul>
            <li>Enterprise</li>
            <li>Chickasaw</li>
            <li>Eufaula</li>
          </ul>
          <ul>
            <li>Anniston</li>
            <li>Clanton</li>
            <li>Anchorage</li>
          </ul>
          <ul>
            <li>Athens</li>
            <li>Cullman</li>
            <li>Cordova</li>
          </ul>
          <ul>
            <li>Atmore</li>
            <li>Decatur</li>
            <li>Fairbanks</li>
          </ul>
          <ul class="last">
            <li>Auburn</li>
            <li>Demopolis</li>
            <li>Haines</li>
          </ul>
        </div>
      </div>
    </div>
    <div class="text-center"> <a href="#" class="btn-one">Browse All Categories</a></div>
  </div>
</div> -->
<!-- Popular Search Wrapper End -->
<!-- Testimonials Wrapper Start -->
<!-- <div class="testimonials-wrapper">
  <div class="container">
    <div class="title">
      <h2>Success <span>Stories</span></h2>
      <h3>Here you can see</h3>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div id="myCarousel" class="carousel slide" data-ride="carousel"> -->
        <!-- Testimonials Indicators -->
        <!-- <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol> -->
        <!-- Testimonials slides -->
        <!-- <div class="carousel-inner" role="listbox">
          <div class="item active">
            <div class="col-md-8 col-sm-12 col-md-offset-2 col-sm-offset-0 col-xs-offset-0">
              <div class="testimonials-main">
                <div class="testimonials-inner"> <i class="fa fa-quote-left"></i>
                  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                    industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type
                    and scrambled it to make a type specimen book.</p>
                  <div class="testimonials-img-main"> </div>
                </div>
                <span class="triangle-down"></span>
                <div class="testimonial-img"> <img src="images/testimonials1.png" alt=""> </div>
                <div class="testimonials-text">
                  <p class="client-name">Client Name</p>
                  <p>Designation</p>
                </div>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="col-md-8 col-sm-12 col-md-offset-2 col-sm-offset-0 col-xs-offset-0">
              <div class="testimonials-main">
                <div class="testimonials-inner"> <i class="fa fa-quote-left"></i>
                  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                    industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type
                    and scrambled it to make a type specimen book.</p>
                  <div class="testimonials-img-main"> </div>
                </div>
                <span class="triangle-down"></span>
                <div class="testimonial-img"> <img src="images/testimonials2.png" alt=""> </div>
                <div class="testimonials-text">
                  <p class="client-name">Client Name</p>
                  <p>Designation</p>
                </div>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="col-md-8 col-sm-12 col-md-offset-2 col-sm-offset-0 col-xs-offset-0">
              <div class="testimonials-main">
                <div class="testimonials-inner"> <i class="fa fa-quote-left"></i>
                  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                    industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type
                    and scrambled it to make a type specimen book.</p>
                  <div class="testimonials-img-main"> </div>
                </div>
                <span class="triangle-down"></span>
                <div class="testimonial-img"> <img src="images/testimonials3.png" alt=""> </div>
                <div class="testimonials-text">
                  <p class="client-name">Client Name</p>
                  <p>Designation</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div> -->
<!-- Testimonials Wrapper End -->
<!-- App Wrapper Start -->
<!-- <div class="app-wrapper">
  <div class="container">
    <div class="row">
      <div class="col-md-10 col-md-offset-1 col-sm-offset-0 col-xs-offset-0">
        <div class="row">
          <div class="col-sm-5">
            <div class="app-img"> <img src="images/app-img.png" alt=""> </div>
          </div>
          <div class="col-sm-7">
            <div class="app-text">
              <h2>The <span>Jobee App</span></h2>
              <h3>A world of oppertunity in your hand</h3>
              <p>Pellentesque et pulvinar orci. Suspendisse sed euismod purus. Pellentesque nunc ex, ultrict	es eu enim non, consectetur interdum nisl. Nam congue interdum mauris, sed ultrices augue lacinia in. Praesent turpis purus, faucibus in tempor vel, dictum ac eros. Pellentesque et pulvinar orci. Suspendisse sed euismod purus. Pellentesque nunc ex, ultrices eu enim non, consectetur interdum nisl. Nam congue interdum mauris, sed ultrices augue lacinia in. Praesent turpis purus, faucibus in tempor vel, dictum ac eros.</p>
              <div class="app-buttons"><a href="#" class="btn-one space"><i class="fa fa-apple" aria-hidden="true"></i>Download</a> <a href="#" class="btn-one"><i class="fa fa-android" aria-hidden="true"></i>Download</a></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div> -->
<!-- App Wrapper End -->
<!-- Subscribe Wrapper Start -->
<!-- <div class="subscribe-wrapper">
  <div class="container">
    <div class="title">
      <h2>Subscribe</h2>
      <h3>Get weekly top new jobs delivered to your inbox</h3>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-sm-8 col-sm-offset-2 col-xs-offset-0 subscirbe">
        <div class="form">
          <div class="form-group">
            <input placeholder="Enter your Email" id="exampleInputName" class="form-control first" type="text">
          </div>
          <input class="bttn" value="Subscribe" type="text">
        </div>
      </div>
    </div>
  </div>
</div> -->
<!-- Subscribe Wrapper End -->
<!-- blog Wrapper Start -->
<!-- <div class="blog-wrapper">
  <div class="container">
    <div class="row">
      <div class="col-sm-4">
        <div class="blog-box">
          <div class="blog-img"> <img src="images/blog-img1.jpg" alt=""> </div>
          <div class="blog-caption">
            <h3><a href="blog-details.php?d=agr">Importance Of Agriculture</a></h3>
            <p>Organic forming by the company which is a method of agriculture. which is based on the use of synthetic
              fertilizers and pesticides and which uses Crop rotation Green manure compost etc to mantian the fertility
              of land.</p>
          </div>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="blog-box">
          <div class="blog-img"> <img src="images/blog-img2.jpg" alt=""> </div>
          <div class="blog-caption">
            <h3><a href="blog-details.php?d=edu">Education Reform</a></h3>
            <p>In our country, however civic duties have been included in the education theory. However not all students
              have their complete knowledge If today's students want to improve the level of education by keeping the
              spirit of...</p>
          </div>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="blog-box">
          <div class="blog-img"> <img src="images/blog-img3.jpg" alt=""> </div>
          <div class="blog-caption">
            <h3><a href="blog-details.php?d=ssi">Small Scale Industry</a></h3>
            <p>Small Scale Industry is also called cottage industry this is a field that gives maximum Jobs to the
              people. Small Scale industry has a very important contribution in strengthening the economy of our India
              Country. At present...</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div> -->
<!-- blog Wrapper End -->

<?php
include "include/footer.php";
?>