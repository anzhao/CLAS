<?php
    require_once(dirname(__FILE__) . "/../includes/common.inc.php");
    require_once(dirname(__FILE__) . "/../database/media.php");
/*
    if(isUserLoggedIn()) {
        $userID     = $loggedInUser->user_id;
        $userName   = $loggedInUser->display_username;
    } else {
        header("Location: $applicationLoginURL");
        exit;
    //    print "user NOT logged in";
    }
*/
    startSession();

    // TODO: validate input
    $videoID = $_GET['video_id'];
    $groupID = $_GET['group_id'];

    $media = new media();
//print "videoID: $videoID";    
    $media->removeVideoGroup($videoID, $groupID);
    $media->close();
