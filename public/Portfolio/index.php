<?php

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
    "Home" => "./index.php",
    "Progetti" => "./progetti.php",
    "Contattami" => "./contattami.php",
);

$basic = new Basic_components();
$basic->setHead("Arch. Mario Rossi");

$headerMenu = new header_menu();
$headerMenu ->showHeaderMenu($arrayButton,"Arch. Mario Rossi","./index.php","#fff","#2c292f");


$title = new Basic_components();
$title = $title -> setH1("Arch. Mario Rossi","style='color:#2196f3;text-align:center;'");

$subtitle = new Basic_components();
$subtitle = $subtitle -> setH2("L'architettura è la mia vita, amo il design moderno e le grandi sfide!","style='color:#2196f3; text-align:center; margin-left: 170px; margin-right: 170px'");

$cit = new Basic_components();
$cit = $cit -> setH4("\"Lo scopo dell'architettura è di proteggere e migliorare la vita dell'uomo sulla terra, per appagare il suo credo nella nobiltà della sua esistenza.\"","style='color:#2196f3; text-align:center; font-style:italic; margin: 10px 170px; margin-top: 50px;'");

$author_cit = new Basic_components();
$author_cit = $author_cit -> setH6("cit. ELIEL SAARINEN","style='color:#2196f3; text-align:center; margin: 10px 170px;'");

$info = new Basic_components();
$info = $info -> setContainerByArray([$title,$subtitle,$cit, $author_cit], "style= 'margin-top: 20%;'");

$img = new Basic_components();
$img = $img -> setImg("https://casaegiardino.info/wp-content/uploads/2020/04/Casa-e-Giardino-Sergio_0581-1067x800.jpg");

$col2 = new two_column_div();
$col2 -> printTwoColumnDiv($img, $info);




$footer = new footer();
$footer->setFooter("Arch. Mario rossi","via Roma, Milano", "3490392829","mariorossi@gmail.com","tizio#sant.it","Siamo quello che costuiamo", "style= background-color:#2c292f ");
