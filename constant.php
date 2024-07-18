<?php
session_start();
date_default_timezone_set('Asia/Kolkata');
$BASE_URL="index.php";
// website file path on server

// $URL="https://voiceofcisfretiree.in/api/src/";
// $ADMIN_IMG_PATH="https://voiceofcisfretiree.in/user/img/";
// $GALLERY_IMG_PATH="https://voiceofcisfretiree.in/admin/image/gallery/";
// $GALLERY_VIDEO_PATH="https://voiceofcisfretiree.in/admin/uploads/videos/";
// $GALLERY_NEWS_PATH="https://voiceofcisfretiree.in/admin/uploads/news/";

// website file path on localhost
$URL="http://localhost/cisfportal/api/src/";
$ADMIN_IMG_PATH="http://localhost/cisfportal/user/img/";
$GALLERY_IMG_PATH="http://localhost/cisfportal/admin/image/gallery/";
$GALLERY_VIDEO_PATH="http://localhost/cisfportal/admin/uploads/videos/";
$GALLERY_NEWS_PATH="http://localhost/cisfportal/admin/uploads/news/";

$EXAM_NAME="UPPCL EXAMINATION";
$HOME="index.php"; 

$SECRET_KEY = "dKgLINTEL2013aN99840$@";  
$ISSUER_CLAIM = "GLINTEL TECHNOLOGY PVT LTD"; // this can be the servername
$AUDIENCE_CLAIM = "PSP NEWS";

$LOGIN_SUCCESS_MSG="Login Successful";
$LOGIN_FAILED_MSG="Request Failed";

?>