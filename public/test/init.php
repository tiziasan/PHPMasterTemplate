<?php
error_reporting(E_ALL);
ini_set("display_errors","On");

include_once "../../Components/basic_components/basic_components.php";
include_once "../../Components/card/card.php";
include_once "../../Components/five_column_div/five_column_div.php";
include_once "../../Components/footer/footer.php";
include_once "../../Components/footer_2/footer_2.php";
include_once "../../Components/four_column_div/four_column_div.php";
include_once "../../Components/general_form/general_form.php";
include_once "../../Components/header_menu/header_menu.php";
include_once "../../Components/img-slider/img_slider.php";
include_once "../../Components/login_form/login_form.php";
include_once "../../Components/map/map.php";
include_once "../../Components/news/news.php";
include_once "../../Components/one_column_div/one_column_div.php";
include_once "../../Components/payment_form/payment_form.php";
include_once "../../Components/profile_card/profile_card.php";
include_once "../../Components/recipe_card/recipe_card.php";
include_once "../../Components/registration_form/registration_form.php";
include_once "../../Components/six_column_div/six_column_div.php";
include_once "../../Components/table/table.php";
include_once "../../Components/three_column_div/three_column_div.php";
include_once "../../Components/two_column_div/two_column_div.php";
include_once "../../Components/footer/footer.php";

$arrayButton = array(
    "Home" => "http://www.google.it",
    "Profile" => "http://www.google.it",
    "Contact" => "http://www.google.it",
    "House" => "http://www.google.it",
);

$arrayColumns= array("row1","row2","row3","row4");

$arrayRaws = array(
    array("row1","row2","row3","row4"),
    array("row1","row2","row3","row4"),
    array("row1","row2","row3","row4"),
    array("row1","row2","row3","row4")
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

//$section = new section();
//$section ->insertSection("This is a section Title", "This is a section Body");

$map3 = new map();
$map3 = $map3 ->setMap("università degli studi dell'aquila");
$map2 = new map();
$map2 = $map2 ->setMap("università degli studi dell'aquila");
$map1 = new map();
$map1 = $map1->setMap("università degli studi dell'aquila");


$div3col4 = new three_column_div();
$div3col4 ->setThreeColumnDiv($map1, $map2, $map3);




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

$images = array("https://upload.wikimedia.org/wikipedia/it/8/83/No_immagini.png","https://www.pcprofessionale.it/wp-content/uploads/2018/12/Colori-negativi.jpg","https://cdn.pixabay.com/photo/2015/02/24/15/41/dog-647528_1280.jpg");
$slider= new img_slider();
$slider = $slider->insertSlider($images);
$divSlider = new one_column_div();
$divSlider->setOneColumnDiv($slider);


$footer =  new footer();
$footer->setFooter("PHPMasterTemplate","tiziocompany", "via dei ceci","345261272837","tizio#sant.it","http://www.google.it","test");
