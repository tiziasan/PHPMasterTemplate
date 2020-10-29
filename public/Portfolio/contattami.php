<?php
error_reporting(E_ALL);
ini_set("display_errors","On");

include "../../Components/basic_components/basic_components.php";
include "../../Components/header_menu/header_menu.php";
include "../../Components/footer/footer.php";
include "../../Components/general_form/general_form.php";
include "../../Components/one_column_div/one_column_div.php";

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
$title -> printH1("Vogliamo collaborare per costruire insieme grandi opere? Contattami!","style='color:#2196f3;text-align:center;'");

$form = new general_form();
$form = $form-> createGeneralForm('test');

$div = new one_column_div();
$div -> setOneColumnDiv($form);


$footer = new footer();
$footer->setFooter("Arch. Mario rossi","via Roma, Milano", "3490392829","mariorossi@gmail.com","tizio#sant.it","Siamo quello che costuiamo", "style= background-color:#2c292f ");
