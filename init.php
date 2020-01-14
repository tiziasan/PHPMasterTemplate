<?php
error_reporting(E_ALL);
ini_set("display_errors","On");


include ("/Applications/MAMP/htdocs/PHPMasterTemplate/Components/basic_components/basic_components.php");
//include("/Applications/MAMP/htdocs/PHPMasterTemplate/Components/user_profile/user_profile.php");


$basic = new basic_components();
$basic->setHead("prova");
$basic->setH1("ciao", "id='prova'");
$basic->setButton("ciao", null);
$basic->setH6("ciao", null);


