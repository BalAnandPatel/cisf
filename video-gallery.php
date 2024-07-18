<?php
include "include/header.php";
$url = $URL . "gallery/read_video_gallery.php";
$data = array();
//print_r($data);
$postdata = json_encode($data);
$client = curl_init($url);
curl_setopt($client, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($client, CURLOPT_POSTFIELDS, $postdata);
$response = curl_exec($client);
// print_r($response);
$result = json_decode($response);
// print_r($result);
?>
<!-- breadcrumb Wrapper Start -->
<div class="breadcrumb-wrapper">
  <div class="container">
    <div class="banner-title">
      <h2>Video Gallery</h2>
      <div class="line"> <span></span></div>
    </div>
    <ul class="inner-breadcrumb">
      <li><a href="index.php">Home</a></li>
      <li>Video Gallery</li>
    </ul>
  </div>
</div>
<!-- breadcrumb Wrapper End -->
<!-- Inner page Wrapper Start -->
<div class="inner-page-wrapper blog-wrapper">
  <div class="container">

    <div class="row">
      <?php
      $counter = 0;
      foreach ($result as $key => $value) {
        foreach ($value as $key1 => $value1) {
          $video = $GALLERY_VIDEO_PATH . "gallery_video_" . $value1->id . ".mp4";
          ?>

          <div class="col-sm-4 img-thumbnail">
            <div class="blog-box">
              <div class="blog-img">
                <video width="100%" height="240" controls>
                  <source src="<?php echo $video; ?>" type="video/mp4">
                  Your browser does not support the video tag.
                </video>
              </div>
              <div class="blog-caption">
                <h3>
                  <?php echo $value1->videoTitle; ?>
                </h3>
                <p>
                  <?php echo $value1->videoDescription; ?>
                </p>
              </div>
            </div>
          </div>

        <?php }
      } ?>
    </div>

  </div>
</div>
<!-- Inner page Wrapper End -->
<?php
include "include/footer.php";
?>