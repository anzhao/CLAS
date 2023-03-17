<?php
require_once(dirname(__FILE__) . '/../includes/common.inc.php');
require_once(dirname(__FILE__) . "/../database/media.php");


startSession();
$userID     = $_SESSION['user_id'];
$userName   = $_SESSION['name'];

//print "hello";
//print_r($_POST);

$videoID            = $_POST['video_id'];
$playbackPosition   = $_POST['playback_position'];
//$inPlayback         = (bool) intval($_POST['in_playback']);
$playbackStart      = (bool) intval($_POST['playback_start']);

$users = new users();

$users->recordEvent();


$users->close();
