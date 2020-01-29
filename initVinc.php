<?php
error_reporting(E_ALL);
ini_set("display_errors","On");


include_once "Components/basic_components/basic_components.php";
include_once "Components/recipe_card/recipe_card.php";
include_once "Components/three_column_div/three_column_div.php";
include_once "Components/map/map.php";
include_once "Components/header_menu/header_menu.php";
include_once "Components/news/news.php";
include_once "Components/list/list_element.php";

$arrayButton = array(
    "Home" => "http://www.google.it",
    "Profile" => "http://www.google.it",
    "Contact" => "http://www.google.it",
    "House" => "http://www.google.it",

);

$basic = new Basic_components();
$basic->setHead("PHP Template Engine");

$headerMenu = new header_menu();
$headerMenu ->showHeaderMenu($arrayButton,"PHP Template Engine","http://www.google.it");




$element1 = new Basic_components();
$element1 = $element1->setListItem("elemento1");

$numero2 = new Basic_components();
$numero2 = $numero2->setListItem(2);

$a1 = new Basic_components();
$a1 = $a1->setAReference("link1", "href=\"#\"");
$link3 = new Basic_components();
$link3 = $link3->setListItem($a1);

$array = array($element1,$numero2,$link3);

$list = new list_element();
$list->setListElement($array);





