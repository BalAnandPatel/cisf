<?php
include "include/header.php";
$url = $URL . "gallery/read_galley.php";
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
      <h2>Image Gallery</h2>
      <div class="line"> <span></span></div>
    </div>
    <ul class="inner-breadcrumb">
      <li><a href="index.php">Home</a></li>
      <li>Image Gallery</li>
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
          $image = $GALLERY_IMG_PATH . "gallery_img" . $value1->id . ".png";
          ?>

          <div class="col-sm-4 img-thumbnail">
            <div class="blog-box">
              <div class="blog-img"> <img src="<?php echo $image; ?>" alt=""> </div>
              <div class="blog-caption">
                <h3>
                  <?php echo $value1->galleryTitle; ?>
                </h3>
                <p>
                  <?php echo $value1->galleryDescription; ?>
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