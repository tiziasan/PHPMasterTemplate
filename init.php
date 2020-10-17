<?php
error_reporting(E_ALL);
ini_set("display_errors","On");


include "Components/basic_components/basic_components.php";
include "Components/recipe_card/recipe_card.php";
include "Components/three_column_div/three_column_div.php";
include "Components/map/map.php";
include "Components/header_menu/header_menu.php";
include "Components/news/news.php";
include "Components/footer/footer.php";
include "Components/one_column_div/one_column_div.php";
include "Components/table/table.php";
include "Components/img-slider/img_slider.php";


$arrayButton = array(
    "Home" => "http://www.google.it",
    "Profile" => "http://www.google.it",
    "Contact" => "http://www.google.it",
    "House" => "http://www.google.it",
);

$arrayColumns= array("casa1","casa2","casa3","casa4");

$arrayRaws = array(
    array("casa1","casa2","casa3","casa4"),
    array("casa1","casa2","casa3","casa4"),
    array("casa1","casa2","casa3","casa4"),
    array("casa1","casa2","casa3","casa4")
);

$basic = new Basic_components();
$basic->setHead("PHP Template Engine");

$headerMenu = new header_menu();
$headerMenu ->showHeaderMenu($arrayButton,"PHP Template Engine","http://www.google.it",'cerca.php');

$title = new Basic_components();
$title = $title -> printH1("Benvenuti al nostro blog dio cucina");

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
$map3 = $map3 ->setMap("università degli studi dell'aquila");
$map2 = new map();
$map2 = $map2 ->setMap("università degli studi dell'aquila");
$map1 = new map();
$map1 = $map1->setMap("università degli studi dell'aquila");


$div3col4 = new three_column_div();
$div3col4 ->setThreeColumnDiv($map1, $map2, $map3);

$div = new one_column_div();
$div->setOneColumnDiv($map1,$map1);


$news = new news();
$news = $news->insertNews("salvini", "ciao", "vota", "http://google.it","politica");
$news1 = new news();
$news1 = $news1->insertNews("salvini", "ciao", "vota", "http://google.it","politica");
$news2 = new news();
$news2 = $news2->insertNews("salvini", "ciao", "vota", "http://google.it","politica");

$div3col3 = new three_column_div();
$div3col3 ->setThreeColumnDiv($news, $news1, $news2);

$table = new table();
$table->setTable($arrayColumns, $arrayRaws);

$images = array("https://upload.wikimedia.org/wikipedia/it/8/83/No_immagini.png","https://www.pcprofessionale.it/wp-content/uploads/2018/12/Colori-negativi.jpg","https://lh3.googleusercontent.com/proxy/hJW1plB86-Ni3ivEIIp_-_gOPjdCBWzn0YxFejPT_K6DhAMnsvgJt9goPYSOr-LKhhs-PdIJjfAFD-JshKXtcTuWjFnoTwjJgNtuO5JYx9i6xc2S_MGNqbCyHKqaqXg2NkRpomrXStoA6XT_qg8");
$slider= new img_slider();
$slider = $slider->insertSlider($images);
$divSlider = new one_column_div();
$divSlider->setOneColumnDiv($slider);


$footer =  new footer();



$footer->setFooter("PHPMasterTemplate","tiziocompany", "via dei ceci","345261272837","tizio#sant.it","http://www.google.it","In god we trust.");

