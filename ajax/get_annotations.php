<?php

require_once(dirname(__FILE__) . "/../includes/common.inc.php");
require_once(dirname(__FILE__) . "/../database/annotations.php");


startSession();
$userID = $_SESSION['user_id'];


$videoID            = $_GET['video_id'];
$annotationMode     = $_GET['annotation_mode'];
$viewMode           = intval($_GET['view_mode']);

//(isset($flagMode)) ? $flagMode = true : $flagMode = false;

// strip out hash
$videoID = str_replace("#", "", $videoID);
//print "flagMode($flagMode)\n";
//(is_bool($flagMode)) ? print "flagMode is a bool" : print "flagMode is ! a bool";
//(is_string($flagMode)) ? print "flagMode is a string" : print "flagMode is ! a string";

$annotationsDB  = new annotationsDB();
$annotations    = $annotationsDB->getAnnotations($videoID, $userID, $annotationMode, $viewMode);

//print_r($annotations);
$jsonString;

// TODO: this bit is redundant
// annotation ownership property
if (count($annotations) > 0) {
    foreach ($annotations as $key=>$val) {
		
    	//print "key:$key<br />";
        if ($userID == $annotations[$key]['user_id']) {
            $annotations[$key]['my_annotation'] = "true";
        } else {
            $annotations[$key]['my_annotation'] = "false";
        }
        
        // automatically make links clickable (while stripping out everything else to prevent XSS)
        $annotations[$key]['description_with_html'] = makeLinksClickable($annotations[$key]['description']);
    }
}
//print_r($annotations);

$jsonString .= json_encode($annotations);
print $jsonString;
