<?php
require_once(dirname(__FILE__) . "/../includes/common.inc.php");
require_once(dirname(__FILE__) . "/../database/media.php");


startSession();

// TODO: validate input
$videoID = $_GET['video_id'];

$media = new media();
//print "videoID: $videoID";    
$groupID = $media->getVideoGroup($videoID);
$media->close();

print json_encode($groupID);
