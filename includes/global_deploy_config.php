<?php
// Don't change this often unless you need to deploy new instance
// Put "preprocessor" parameters here

// DEPLOY CONFIG: add a new entry here if you are making a new instance of CLAS
//$DEPLOYMENT_NAME = "prod";
//$DEPLOYMENT_NAME = "dev";
$DEPLOYMENT_NAME = "demo";
//$DEPLOYMENT_NAME = "medclas";
//$DEPLOYMENT_NAME = "educ";

$logoutURL = "";
$serverVersion = "";
$configFolderName = "";
$applicationURL = "";
$webFolderName = "";

// specify other parameters based on $DEPLOYMENT_NAME here
switch ($DEPLOYMENT_NAME) {
	case "dev":
		$logoutURL              = "CUSTOMIZE_SECURE_SHIBBOLETH_LOGOUTPATH";
		$serverVersion          = "CLAS_dev_server";
		$configFolderName 		= "dev";
		$applicationURL         = "";
		$webFolderName			= "dev";
		define("kalturaServiceURL", "CUSTOMIZE_THIS");
		define("kalturaCdnURL_1", "CUSTOMIZE_THIS");
		$kalturaCdnURL = kalturaCdnURL_1;

		// MIGRATION: use when migrating between KMC's (such as Saas to internal)
		// Set to blank to turn off the redundant play mechanism (which incurs a slight pageload slowdown)
		define("kalturaCdnURL_INTERIM", "CUSTOMIZE_THIS");

		break;
	case "demo":
		$logoutURL              = "";
		$serverVersion          = "CLAS_demo_server";
		$configFolderName 		= "demo";
		$applicationURL         = "";
		$webFolderName			= "demo";
		define("kalturaServiceURL", "");
		define("kalturaCdnURL_1", "");
		$kalturaCdnURL = kalturaCdnURL_1;
		define("kalturaCdnURL_INTERIM", "");

		break;
	case "prod":
		$logoutURL              = "CUSTOMIZE_SECURE_SHIBBOLETH_LOGOUTPATH";
		$serverVersion          = "CLAS_prod_server";
		$configFolderName 		= "prod";
		$applicationURL         = "CUSTOMIZE_SECURE_SHIBBOLETH_ROOTPATH/";
		$webFolderName			= "clas";
		define("kalturaServiceURL", "CUSTOMIZE_THIS");
		define("kalturaCdnURL_1", "CUSTOMIZE_THIS");
		$kalturaCdnURL = kalturaCdnURL_1;
		define("kalturaCdnURL_INTERIM", "CUSTOMIZE_THIS");

		break;
	case "medclas":
		$logoutURL              = "CUSTOMIZE_SECURE_SHIBBOLETH_LOGOUTPATH";
		$serverVersion          = "CLAS_medclas_server";
		$configFolderName 		= "medclas";
		$applicationURL         = "CUSTOMIZE_SECURE_SHIBBOLETH_ROOTPATH/medclas/";
		$webFolderName			= "medclas";
		define("kalturaServiceURL", "CUSTOMIZE_THIS");
		define("kalturaCdnURL_1", "CUSTOMIZE_THIS");
		$kalturaCdnURL = kalturaCdnURL_1;
		define("kalturaCdnURL_INTERIM", "CUSTOMIZE_THIS");

		break;
	case "educ":
		$logoutURL              = "CUSTOMIZE_SECURE_SHIBBOLETH_LOGOUTPATH";
		$serverVersion          = "";
		$configFolderName 		= "";
		$applicationURL         = "CUSTOMIZE_SECURE_SHIBBOLETH_ROOTPATH/";
		$webFolderName			= "";
		define("kalturaServiceURL", "CUSTOMIZE_THIS");
		define("kalturaCdnURL_1", "CUSTOMIZE_THIS");
		$kalturaCdnURL = kalturaCdnURL_1;
		define("kalturaCdnURL_INTERIM", "CUSTOMIZE_THIS");

		break;
}
