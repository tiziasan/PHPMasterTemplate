<?php
error_reporting(E_ALL);
ini_set("display_errors","On");


include "Components/basic_components/basic_components.php";
//include("/Applications/MAMP/htdocs/PHPMasterTemplate/Components/user_profile/user_profile.php");
include "Components/recipe_card/recipe_card.php";
include "Components/user_profile/user_profile.php";
include "Components/login_form/login_form.php";
include "Components/news/news.php";
include "Components/profile_card/profile_card.php";

$basic = new Basic_components();
$basic->setHead("prova1");
//$basic->setH1("ciao", "id='prova'");
//$basic->setLabel("ciao");
//$basic->setInput("type='checkbox'");
//$basic->setTextArea('ipse lorum...', null);

//$card = new recipe_card();
//$card -> showRecipeCard("Spaghetti", "30 minuti", "3 porzioni", "Facile", "Se usi la pancetta non sei Italiano!","Cuciniamo!");

//$utente = new login_form();
//$utente -> login("email", "password");

//$news = new news();
//$news ->insertNews("titolo1", "viaggi", "prova con testo");

$profile = new profile_card();
$profile ->createProfile("pippo", "baudo");