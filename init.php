<?php
error_reporting(E_ALL);
ini_set("display_errors","On");


include "Components/basic_components/basic_components.php";
//include("/Applications/MAMP/htdocs/PHPMasterTemplate/Components/user_profile/user_profile.php");
include "Components/recipe_card/recipe_card.php";
include "Components/three_column_div/three_column_div.php";
include "Components/map/map.php";


$basic = new Basic_components();
$basic->setHead("prova1");
//$basic->setH1("ciao", "id='prova'");
//$basic->setLabel("ciao");
//$basic->setInput("type='checkbox'");
//$basic->setTextArea('ipse lorum...', null);

//$card1 = new recipe_card();
//$card1 = $card1 -> showRecipeCard("Spaghetti", "30 minuti", "3 porzioni", "Facile", "Se usi la pancetta non sei Italiano!","Cuciniamo!");
//
//$card2 = new recipe_card();
//$card2 = $card2 -> showRecipeCard("Spaghetti", "30 minuti", "3 porzioni", "Facile", "Se usi la pancetta non sei Italiano!","Cuciniamo!");
//
//$card3 = new recipe_card();
//$card3 = $card3 -> showRecipeCard("Spaghetti", "30 minuti", "3 porzioni", "Facile", "Se usi la pancetta non sei Italiano!","Cuciniamo!");
//
//$div3col = new three_column_div();
//$div3col ->setThreeColumnDiv($card1, $card2, $card3);
//
//$card4 = new recipe_card();
//$card4 = $card4 -> showRecipeCard("Spaghetti", "30 minuti", "3 porzioni", "Facile", "Se usi la pancetta non sei Italiano!","Cuciniamo!");
//
//$card5 = new recipe_card();
//$card5 = $card5 -> showRecipeCard("Spaghetti", "30 minuti", "3 porzioni", "Facile", "Se usi la pancetta non sei Italiano!","Cuciniamo!");
//
//$card6 = new recipe_card();
//$card6 = $card6 -> showRecipeCard("Spaghetti", "30 minuti", "3 porzioni", "Facile", "Se usi la pancetta non sei Italiano!","Cuciniamo!");
//
//$div3col2 = new three_column_div();
//$div3col2 ->setThreeColumnDiv($card4, $card5, $card6);

$map = new map();
$map->setMap("Roma");






