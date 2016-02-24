<?php

require_once(dirname(__FILE__) . "/../includes/common.inc.php");
require_once(dirname(__FILE__) . "/../database/users.php");


startSession();
$userID     = $_SESSION['user_id'];

$videoID    = $_GET['video_id'];

// strip out hash
$videoID = str_replace("#", "", $videoID);

$jsonString;

$users = new users();
$visible = $users->trendlineVisible($userID, $videoID);
$users->close();

$jsonString .= json_encode($visible);
//print "jsonString ";
print $jsonString;
?>
