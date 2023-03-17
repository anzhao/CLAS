<?php
require_once(dirname(__FILE__) . "/../includes/common.inc.php");
require_once(dirname(__FILE__) . "/../database/users.php");


startSession();
$userID     = $_SESSION['user_id'];
$userName   = $_SESSION['name'];

// TODO: validate input
$classID = $_GET['class_id'];

$user           = new users();
$classList      = $user->getClassList($classID);
$user->close(); 

print json_encode($classList);
