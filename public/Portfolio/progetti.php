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
    "Home" => "./index.php",
    "Progetti" => "./progetti.php",
    "Contattami" => "./contattami.php",
);

$basic = new Basic_components();
$basic->setHead("Arch. Mario Rossi");

$headerMenu = new header_menu();
$headerMenu ->showHeaderMenu($arrayButton,"Arch. Mario Rossi","./index.php","#fff","#2c292f");


$title1 = new Basic_components();
$title1 = $title1 -> setH3("Villa Contemporanea");

$images1 = array(
    "https://casaegiardino.info/wp-content/uploads/2020/04/Casa-e-Giardino-Sergio_0581-1067x800.jpg",
    "https://casaegiardino.info/wp-content/uploads/2020/04/Casa-e-Giardino-Sergio_0577-1067x800.jpg",
    "https://casaegiardino.info/wp-content/uploads/2020/04/Casa-e-Giardino-Sergio_0593-1067x800.jpg");
$slider1= new img_slider();
$slider1 = $slider1->insertSlider($images1);

$container1 = new Basic_components();
$container1 = $container1->setContainerByArray([$title1,$slider1], "style=' text-align:center;'");

$row1 = new one_column_div();
$row1 -> printOneColumnDiv($container1);



$title2 = new Basic_components();
$title2 = $title2 -> setH3("Interni da Montagna");

$images2 = array("https://casaegiardino.info/wp-content/uploads/2020/04/5.jpg",
    "https://casaegiardino.info/wp-content/uploads/2020/04/1.jpg",
    "https://casaegiardino.info/wp-content/uploads/2020/04/9.jpg");
$slider2 = new img_slider();
$slider2 = $slider2->insertSlider($images2);

$container2 = new Basic_components();
$container2 = $container2->setContainerByArray([$title2,$slider2], "style=' text-align:center;'");

$row2 = new one_column_div();
$row2 -> printOneColumnDiv($container2);



$title3 = new Basic_components();
$title3 = $title3 -> setH3("La Geometria Vince");

$images3 = array("http://www.gruppolithos.it/upload/content/slide/20191018084315-01.jpg",
    "http://www.gruppolithos.it/upload/catalogo/prodotti/img/20191018083915-02.jpg",
    "http://www.gruppolithos.it/upload/catalogo/prodotti/img/20191018084000-05.jpg");
$slider3 = new img_slider();
$slider3 = $slider3->insertSlider($images3);

$container3 = new Basic_components();
$container3 = $container3->setContainerByArray([$title3,$slider3], "style=' text-align:center;'");

$row3 = new one_column_div();
$row3 -> printOneColumnDiv($container3);




$footer = new footer();
$footer->setFooter("Arch. Mario rossi","via Roma, Milano", "3490392829","mariorossi@gmail.com","tizio#sant.it","Siamo quello che costuiamo", "style= background-color:#2c292f ");
