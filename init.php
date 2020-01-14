<?php
error_reporting(E_ALL);
ini_set("display_errors","On");


include "Components/basic_components/basic_components.php";
//include("/Applications/MAMP/htdocs/PHPMasterTemplate/Components/user_profile/user_profile.php");
include "Components/recipe_card/recipe_card.php";


$basic = new Basic_components();
$basic->setHead("prova1");
//$basic->setH1("ciao", "id='prova'");
//$basic->setLabel("ciao");
//$basic->setInput("type='checkbox'");
//$basic->setTextArea('ipse lorum...', null);

$card = new recipe_card();
$card->showRecipeCard();








