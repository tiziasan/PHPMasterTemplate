<?php


include("./../../component.php");

$profile = new Component("user_profile.html");
$profile->set("username", "Tiziobosss");
$profile->set("name", "Tiziano Santilli");
$profile->set("age", "23");
$profile->set("location", "Rieti");

$layout = new Component("./../frame/frame.html");
$layout->set("title", "User profile");
$layout->set("content", $profile->output());


echo $layout->output();

