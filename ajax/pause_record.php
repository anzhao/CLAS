<?php
require_once(dirname(__FILE__) . "/../includes/common.inc.php");

startSession();
$userName   = $_SESSION['name'];

$videoID = $_POST['video_id'];
$pausePosition = $_POST['pause_position'];


$conn = mysql_connect('localhost', $mysqlUser, $mysqlPassword);
if (!$conn) {
                 die('Not connected : ' . mysql_error());
                 }
                 $db_selected = mysql_select_db($database, $conn);
                 mysql_set_charset("utf8",$conn);
                $result = mysql_query("INSERT INTO pauseEvent VALUES ('$userName', 'PAUSE', '$videoID', '$pausePosition', NULL)");
              ?>;

