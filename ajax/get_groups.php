<?php
require_once(dirname(__FILE__) . "/../includes/common.inc.php");
require_once(dirname(__FILE__) . "/../database/users.php");


startSession();
$userID     = $_SESSION['user_id'];

// TODO: validate input
$classID = $_GET['class_id'];

$user           = new users();
$groups         = $user->getGroupsByClassAndOwner($classID, $userID);
$user->close(); 

print json_encode($groups);
