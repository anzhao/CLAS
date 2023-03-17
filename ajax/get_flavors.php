<?php

require_once(dirname(__FILE__) . '/../kaltura_upload.php');


startSession();
$userID = $_SESSION['user_id'];

$video_id = $_GET['video_id'];
getFlavorIDs($video_id);
