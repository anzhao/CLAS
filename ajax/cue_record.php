<?php

require_once(dirname(__FILE__) . "/../includes/common.inc.php");

startSession();
$userName   = $_SESSION['name'];

$videoID = $_POST['video_id'];
$cuePosition = $_POST['cue_position'];


$conn = mysql_connect('localhost', $mysqlUser, $mysqlPassword);
if (!$conn) {
  die('Not connected : ' . mysql_error());
}
$db_selected = mysql_select_db($database, $conn);
mysql_set_charset("utf8", $conn);
$result = mysql_query("INSERT INTO cueEvent VALUES ('$userName', 'CUE', '$videoID', '$cuePosition', NULL)");
?>;