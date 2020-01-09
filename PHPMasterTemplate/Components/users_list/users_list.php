<?php

include("./../../component.php");


$users = array(
    array("username" => "Tiziano Santilli", "location" => "Rieti")
  , array("username" => "Vincenzo Apostolo", "location" => "Avezzano")
  , array("username" => "Leonardo Marrancone", "location" => "Bellante")
);

foreach ($users as $user) {
    $row = new Component("users_list_details.html");

    foreach ($user as $key => $value) {
        $row->set($key, $value);
    }
    $usersComponents[] = $row;
}

$usersContents = Component::merge($usersComponents);

$usersList  = new Component("users_list.html");
$usersList->set("users", $usersContents);

$layout = new Component("./../frame/frame.html");
$layout->set("title", "Users");
$layout->set("content", $usersList->output());


echo $layout->output();
