<?php
error_reporting(E_ALL);
ini_set("display_errors","On");


include_once "Components/basic_components/basic_components.php";
include_once "Components/recipe_card/recipe_card.php";
include_once "Components/map/map.php";
include_once "Components/header_menu/header_menu.php";
include_once "Components/news/news.php";
include_once "Components/list/list_element.php";
include_once "Components/two_column_div/two_column_div.php";
include_once "Components/three_column_div/three_column_div.php";
include_once "Components/five_column_div/five_column_div.php";



$basic = new Basic_components();
$basic->setHead("PHP Template Engine");


$option1 = new Basic_components();
$option1 = $option1->setOption("italiano");

$option2 = new Basic_components();
$option2 = $option2->setOption("inglese");

$option3 = new Basic_components();
$option3 = $option3->setOption("cinese");

$optionArray = [$option1,$option2,$option3];

$select = new Basic_components();
$select->printSelect($optionArray);



$card1 = new recipe_card();
$card1 = $card1 -> showRecipeCard("Spaghetti", "30 minuti", "3 porzioni", "Facile", "Se usi la pancetta non sei Italiano!","Cuciniamo!","http://www.google.it");

$divcol5 = new five_column_div();
$divcol5 ->setFiveColumnDiv($card1, $card1, $card1, $card1, $card1);



$basic->finish();
Basic_components::;


