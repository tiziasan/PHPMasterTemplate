<?php
error_reporting(E_ALL);
ini_set("display_errors","On");

include_once "Components/basic_components/basic_components.php";
include_once "Components/card/card.php";
include_once "Components/five_column_div/five_column_div.php";
include_once "Components/footer/footer.php";
include_once "Components/footer_2/footer_2.php";
include_once "Components/four_column_div/four_column_div.php";
include_once "Components/general_form/general_form.php";
include_once "Components/header_menu/header_menu.php";
include_once "Components/img-slider/img_slider.php";
include_once "Components/login_form/login_form.php";
include_once "Components/map/map.php";
include_once "Components/news/news.php";
include_once "Components/one_column_div/one_column_div.php";
include_once "Components/payment_form/payment_form.php";
include_once "Components/profile_card/profile_card.php";
include_once "Components/recipe_card/recipe_card.php";
include_once "Components/registration_form/registration_form.php";
include_once "Components/six_column_div/six_column_div.php";
include_once "Components/table/table.php";
include_once "Components/three_column_div/three_column_div.php";
include_once "Components/two_column_div/two_column_div.php";


$arrayButton = array(
    "Home" => "http://www.google.it",
    "Profile" => "http://www.google.it",
    "Contact" => "http://www.google.it",
    "House" => "http://www.google.it",

);

$basic = new Basic_components();
$basic->setHead("PHP Template Engine");

$headerMenu = new header_menu();
$headerMenu ->showHeaderMenu($arrayButton,"PHP Template Engine","http://www.google.it",'cerca.php');


$element1 = new Basic_components();
$element1 = $element1->setListItem("elemento1");

$numero2 = new Basic_components();
$numero2 = $numero2->setListItem(2);

$a1 = new Basic_components();
$a1 = $a1->setAReference("link1", "href=\"#\"");
$link3 = new Basic_components();
$link3 = $link3->setListItem($a1);

$array = array($element1, $numero2, $link3);

$list = new Basic_components();
$list->printListElement($array);


$option1 = new Basic_components();
$option1 = $option1->setOption("italiano");

$option2 = new Basic_components();
$option2 = $option2->setOption("inglese");

$option3 = new Basic_components();
$option3 = $option3->setOption("cinese");

$optionArray = [$option1,$option2,$option3];

$select = new Basic_components();
$select->printSelect($optionArray);



$log1 = new login_form();
$log1 = $log1->login("action=fons.php");

$gf = new general_form();
$gf = $gf->createGeneralForm( "action=fons.php");

$pf = new payment_form();
$pf = $pf->inset_payment_form();

$col3 = new three_column_div();
$col3->setThreeColumnDiv($log1, $gf, $pf);



$map = new map();
$map = $map->setMap("università degli studi dell'aquila");

$map_card = new card();
$map_card = $map_card->setCard($map);

$recipe_card = new recipe_card();
$recipe_card = $recipe_card -> showRecipeCard("Spaghetti", "30 minuti", "3 porzioni", "Facile", "Se usi la pancetta non sei Italiano!","Cuciniamo!","http://www.google.it");

$news = new news();
$news = $news->insertNews("salvini", "ciao", "vota", "http://google.it","politica");

$profile = new profile_card();
$profile = $profile ->createProfile("profile", "profile", "profile", "salva", "http://bellante.com");

$col1 = new one_column_div();
$col1 ->setOneColumnDiv($map_card);

$col2 = new two_column_div();
$col2 ->setTwoColumnDiv($recipe_card, $profile);

$col3 = new three_column_div();
$col3 ->setThreeColumnDiv($map, $map, $map);

$col4 = new four_column_div();
$col4 ->setFourColumnDiv($map, $map, $map, $map);

$col5 = new five_column_div();
$col5 ->setFiveColumnDiv($map, $map, $map, $map, $map);

$col6 = new six_column_div();
$col6->setSixColumnDiv($map, $map, $map, $map, $map, $map);










