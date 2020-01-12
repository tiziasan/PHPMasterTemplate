<?php
error_reporting(E_ALL);
ini_set("display_errors","On");



include ("/Applications/MAMP/htdocs/PHPMasterTemplate/component.php");
include("/Applications/MAMP/htdocs/PHPMasterTemplate/Components/user_profile/user_profile.php");

$profile = new user_profile();
$profile->show();
