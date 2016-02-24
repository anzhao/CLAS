<?php

require_once(dirname(__FILE__) . '/../includes/common.inc.php');
require_once(dirname(__FILE__) . "/../database/annotations.php");


startSession();
$userID     = $_SESSION['user_id'];
$userName   = $_SESSION['name'];

//print "hello";
//print_r($_POST);
$annotationIDs = array();
$annotationDB = new annotationsDB();

//$annotations->truncateTable();
//$annotationsCount = $annotations->countAnnotations();
//print "There are $annotationsCount annotation(s) in total.<br /><br />";

$id                 = $_POST['id'];
$videoID            = $_POST['video_id'];
$startTime          = $_POST['start_time'];
$endTime            = $_POST['end_time'];
$tags               = $_POST['tags'];
$isPrivate          = $_POST['is_private'];
$description        = $_POST['description'];
$videoAnnotationID  = $_POST['video_annotation_id'];
("true" == $isPrivate) ? $isPrivate = 1 : $isPrivate = 0;

$msg = $annotationDB->updateAnnotation($id, $videoID, $userID, $userName, $startTime, $endTime, $description, $tags, $isPrivate, 0, $videoAnnotationID);
//print "msg:$msg";

$annotationDB->close();
?>
