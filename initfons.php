<?php
error_reporting(E_ALL);
ini_set("display_errors","On");


include "Components/basic_components/basic_components.php";
include "Components/recipe_card/recipe_card.php";
include "Components/three_column_div/three_column_div.php";
include "Components/map/map.php";
include "Components/header_menu/header_menu.php";
include "Components/news/news.php";
include "Components/profile_card/profile_card.php";

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


$card1 = new recipe_card();
$card1 = $card1 -> showRecipeCard("Spaghetti", "30 minuti", "3 porzioni", "Facile", "Se usi la pancetta non sei Italiano!","Cuciniamo!","http://www.google.it");

$card2 = new recipe_card();
$card2 = $card2 -> showRecipeCard("Spaghetti", "30 minuti", "3 porzioni", "Facile", "Se usi la pancetta non sei Italiano!","Cuciniamo!","http://www.google.it");

$card3 = new recipe_card();
$card3 = $card3 -> showRecipeCard("Spaghetti", "30 minuti", "3 porzioni", "Facile", "Se usi la pancetta non sei Italiano!","Cuciniamo!","http://www.google.it");

$div3col = new three_column_div();
$div3col ->setThreeColumnDiv($card1, $card2, $card3);

$card4 = new recipe_card();
$card4 = $card4 -> showRecipeCard("Spaghetti", "30 minuti", "3 porzioni", "Facile", "Se usi la pancetta non sei Italiano!","Cuciniamo!","http://www.google.it");

$card5 = new recipe_card();
$card5 = $card5 -> showRecipeCard("Spaghetti", "30 minuti", "3 porzioni", "Facile", "Se usi la pancetta non sei Italiano!","Cuciniamo!","http://www.google.it");

$card6 = new recipe_card();
$card6 = $card6 -> showRecipeCard("Spaghetti", "30 minuti", "3 porzioni", "Facile", "Se usi la pancetta non sei Italiano!","Cuciniamo!","http://www.google.it");

$div3col2 = new three_column_div();
$div3col2 ->setThreeColumnDiv($card4, $card5, $card6);



$map3 = new map();
$map3->setMap("università degli studi dell'aquila");

//$news = new news();
//$news = $news->insertNews("ciao", "ciao", "ciao");
//$news1 = new news();
//$news1 = $news1->insertNews("ciao", "ciao", "ciao");
//$news2 = new news();
//$news2 = $news2->insertNews("ciao", "ciao", "ciao");

//$div3col3 = new three_column_div();
//$div3col3 ->setThreeColumnDiv($news, $news1, $news2);

$profile = new profile_card();
$profile = $profile ->createProfile("fons", "libero", "tutti", "liberi", "bo", "ciaone", "porororoor", "dada@dsa.it", "0994484", "098575849", "fsdfjsd");
$profile1 = new profile_card();
$profile1 = $profile1 -> createProfile("fons", "libero", "tutti", "liberi", "bo", "ciaone", "porororoor", "dada@dsa.it", "0994484", "098575849", "fsdfjsd");
$profile2 = new profile_card();
$profile2 = $profile2->createProfile("fons", "libero", "tutti", "liberi", "bo", "ciaone", "porororoor", "dada@dsa.it", "0994484", "098575849", "fsdfjsd");



$div3col4 = new three_column_div();
$div3col4 ->setThreeColumnDiv($profile, $profile1, $profile2);
