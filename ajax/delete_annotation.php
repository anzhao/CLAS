<?php

require_once(dirname(__FILE__) . '/../includes/common.inc.php');
require_once(dirname(__FILE__) . "/../includes/kaltura/kaltura_functions.php");
require_once(dirname(__FILE__) . "/../database/annotations.php");


startSession();
$userID     = $_SESSION['user_id'];
$userName   = $_SESSION['name'];


//print "hello";
$annotationIDs = array();
$annotationDB = new annotationsDB();

//$annotations->truncateTable();
//$annotationsCount = $annotations->countAnnotations();
//print "There are $annotationsCount annotation(s) in total.<br /><br />";

$id                 = $_POST['id'];
$videoAnnotationID  = $_POST['video_annotation_id'];
/*
print "POST vars:";
foreach ($_POST as $key=>$val) {
    print "$key:$val\n";
}
print "videoAnnotationID: $videoAnnotationID";
*/
$annotationDB->deleteAnnotation($id, $userID);

$annotationDB->close();

?>
