<?php

    require_once(dirname(__FILE__) . "/../includes/common.inc.php");
    require_once(dirname(__FILE__) . "/../includes/kaltura/kaltura_functions.php");
    require_once(dirname(__FILE__) . "/../database/media.php");

    session_start();
    startSession();

    // TODO: validate input
    $videoID = $_POST['video_id'];
    echo "videoID is: " . $videoID;
    $userID  = $_SESSION['user_id'];
    echo "userID is: " . $userID;
    $title = $_POST['title'];
    echo "title is: " . $title;
    $url = $_POST['url'];
    echo "url is: " . $url;
    $description = $_POST['description'];
    echo "description is: " . $description;
    $dur = "";
    $point1 = $_POST['point_one'];
    $point2 = $_POST['point_two'];
    $point3 = $_POST['point_three'];


    $media = new media();

    // delete hosted video as well if the deleting user is the one uploaded
    // the kaltura deletion must happen before the CLAS database deletion for owner check to work
    if ($media->userOwnsMedia($videoID, $userID)) {
        // TODO: this was commented out so that CLAS deletions becomes "soft delete"
        // implement more comprehensive soft deletion later, where deleted videos are
        // marked as deleted within CLAS, and get reassigned to the system-admin group.
        //
        // The system admin group will then have a "hard delete" command in video
        // management. This arrangement allow departments who administer their own
        // CLAS instance to do their own video management.
        //
        // deleteVideoOnKaltura($videoID);
    }
?>

<script>
alert("before the addMedia call!");

</script>



<?php

    //To implement this method to make the embed method to work.
    $media->addMedia($videoID, $userID, $title, $description, '180', $point1, $point2, $point3);

    $media->close();


?>
