<?php
require_once(dirname(__FILE__) . "/../includes/common.inc.php");
require_once(dirname(__FILE__) . "/../database/users.php");

startSession();

// TODO: validate input
$groupID = $_GET['group_id'];

$user           = new users();
$groupMembers   = $user->getGroupMembers($groupID);

$user->close();

print json_encode($groupMembers);
