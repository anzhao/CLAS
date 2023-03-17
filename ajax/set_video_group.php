<?php
    require_once(dirname(__FILE__) . "/../includes/common.inc.php");
    require_once(dirname(__FILE__) . "/../includes/auth.inc.php");
    require_once(dirname(__FILE__) . "/../database/media.php");
    require_once(dirname(__FILE__) . "/../database/users.php");

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
    $userID  = $_SESSION['user_id'];

    $media = new media();
    $users  = new users();
	print "msg: $videoID $groupID $userID ";

    // check ownership
    if ($users->userOwnsGroup($groupID, $userID)) {
        $media->setVideoGroup($videoID, $groupID);
    }

    $users->close();
    $media->close();
