<?php
error_reporting(E_ALL);
ini_set("display_errors","On");


include ("/Applications/MAMP/htdocs/PHPMasterTemplate/Components/basic_components/basic_components.php");
include ("/Applications/MAMP/htdocs/PHPMasterTemplate/component.php");
include("/Applications/MAMP/htdocs/PHPMasterTemplate/Components/user_profile/user_profile.php");


$basic = new basic_components();
$basic->setH1("cazzo");
$basic->setH2("cazzo");
$profile = new user_profile("tizio", "tiziano", "23", "rieti");

