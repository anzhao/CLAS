<?php
require_once(dirname(__FILE__) . "/includes/global_deploy_config.php");
require_once(dirname(__FILE__) . '/includes/kaltura/kaltura_functions.php');
require_once(dirname(__FILE__) . "/includes/common.inc.php");

// override max_execution_time for this script because uploads to Kaltura can take a very long time
$max_execution_time = 60 * 60;
set_time_limit($max_execution_time);
writeToLog("\n-------------- Starting clas_dir/upload_to_kaltura.php -----------------\n");

// restrict this script to run from command line only
$sapi_type = php_sapi_name();

if ('cli' != substr($sapi_type, 0, 3)) {
	exit;
} else {
}

$title          = stripslashes($argv[1]);
$description    = stripslashes($argv[2]);
$userID         = $argv[3];
$file           = $argv[4];
$CopyrightTerm1     	= $argv[5];
$CopyrightTerm2 		= $argv[6];
$CopyrightTerm3 		= $argv[7];
$CopyrightTerm4 		= $argv[8];

writeToLog("$file: title $title -> upload started at " . date("H:i:s") . "\n");

// store custom data in 'tags' field since we aren't using the tags field
$data = "$serverVersion,$userID" .
	",$CopyrightTerm1" .
	",$CopyrightTerm2" .
	",$CopyrightTerm3" .
	",$CopyrightTerm4" .
	"";

$fileToUpload = $uploadPath . $file;

writeToLog("calling uploadToKaltura($fileToUpload, $title, $description, $data)" . "\n");
// die;

$entryID = uploadToKaltura($fileToUpload, $title, $description, $data);
writeToLog("$file: title $title -> upload finished at " . date("H:i:s") . ", result entry_id $entryID\n");
