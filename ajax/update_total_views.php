<?php

require_once(dirname(__FILE__) . '/../includes/common.inc.php');
require_once(dirname(__FILE__) . "/../database/media.php");


startSession();
$userID     = $_SESSION['user_id'];
$userName   = $_SESSION['name'];

//print "hello";
//print_r($_POST);

$videoID = $_POST['video_id'];

$media = new media();

$media->updateTotalViews($userID, $videoID);

$media->close();
?>
