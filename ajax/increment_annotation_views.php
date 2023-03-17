<?php

require_once(dirname(__FILE__) . '/../includes/common.inc.php');
require_once(dirname(__FILE__) . "/../database/annotations.php");


startSession();
$userID     = $_SESSION['user_id'];

//print "hello";
//print_r($_POST);
$annotationIDs = array();
$annotationDB = new annotationsDB();

//$annotations->truncateTable();
//$annotationsCount = $annotations->countAnnotations();
//print "There are $annotationsCount annotation(s) in total.<br /><br />";

$annotationID = $_POST['annotation_id'];
$annotationDB->updateAnnotationViewCount($annotationID, $userID);
$annotationDB->close();
