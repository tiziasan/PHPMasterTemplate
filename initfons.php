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
include "Components/login_form/login_form.php";
include "Components/general_form/general_form.php";
include "Components/registration_form/registration_form.php";
include "Components/footer/footer.php";
include "Components/footer_2/footer_2.php";




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

$news = new news();
$news = $news->insertNews("ciao", "ciao", "ciao", "ciao", "ciao");
$news1 = new news();
$news1 = $news1->insertNews("ciao", "ciao", "ciao", "ciao", "ciao");
$news2 = new news();
$news2 = $news2->insertNews("ciao", "ciao", "ciao", "ciao", "ciao");

$div3col3 = new three_column_div();
$div3col3 ->setThreeColumnDiv($news, $news1, $news2);

$profile = new profile_card();
$profile = $profile ->createProfile("fons", "attaccante", "bllint", "chiama il sindaco", "http://bellante.com");
$profile1 = new profile_card();
$profile1 = $profile1 ->createProfile("fons", "attaccante", "bllint", "chiama il sindaco", "http://bellante.com");
$profile2 = new profile_card();
$profile2 = $profile2->createProfile("fons", "attaccante", "bllint", "chiama il sindaco", "http://bellante.com");



$div3col4 = new three_column_div();
$div3col4 ->setThreeColumnDiv($profile, $profile1, $profile2);

$log1 = new login_form();
$log1 = $log1 -> login("action=fons.php");
$log2 = new login_form();
$log2 = $log2 -> login("action=fons.php");
$log3 = new login_form();
$log3 = $log3 -> login("action=fons.php");

$div3col5 = new three_column_div();
$div3col5 ->setThreeColumnDiv($log1, $log2, $log3);

$gf = new general_form();
$gf = $gf->createGeneralForm( "action=fons.php");
$gf1 = new general_form();
$gf1 = $gf1->createGeneralForm( "action=fons.php");
$gf2 = new general_form();
$gf2 = $gf2->createGeneralForm( "action=fons.php");

$div3col6 = new three_column_div();
$div3col6 ->setThreeColumnDiv($gf, $gf1, $gf2);

$rf = new registration_form();
$rf = $rf->createRegistrationForm("action=fons.php");
$rf1 = new registration_form();
$rf1 = $rf1 ->createRegistrationForm("action=fons.php");
$rf2 = new registration_form();
$rf2 = $rf2 ->createRegistrationForm("action=fons.php");

$div3col7 = new three_column_div();
$div3col7 ->setThreeColumnDiv($rf, $rf1, $rf2);

//$footer = new footer();
//$footer -> setFooter('aaaa','aaaaa','33333333','aaaaa','a', 'a');

$footer_2 = new footer_2();
$footer_2 ->insert_footer($arrayButton, $arrayButton, $arrayButton, $arrayButton, $arrayButton);