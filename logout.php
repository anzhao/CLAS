<?php
require_once(dirname(__FILE__) . "/includes/global_deploy_config.php");
require_once(dirname(__FILE__) . "/includes/common.inc.php");
require_once(dirname(__FILE__) . "/database/users.php");

startSession();

// log session end
$users = new users();
$users->recordLogout($_SESSION['user_id']);
$users->close();

// end PHP session
endSession();

// kill Shibboleth session
header("Location: $logoutURL");
exit;
