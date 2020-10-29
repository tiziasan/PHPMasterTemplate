<?php
error_reporting(E_ALL);
ini_set("display_errors","On");

include "Components/basic_components/basic_components.php";
include "Components/header_menu/header_menu.php";
include "Components/footer/footer.php";
include "Components/general_form/general_form.php";
include "Components/one_column_div/one_column_div.php";

$arrayButton = array(
    "Home" => "/PHPMasterTemplate/SitoRicette.php",
    "Tutte le Ricette" => "/PHPMasterTemplate/SitoRicette.php",
    "Contattaci" => "/PHPMasterTemplate/SitoRicetteContatti.php",
);

$basic = new Basic_components();
$basic->setHead("Cucina 2.0");

$headerMenu = new header_menu();
$headerMenu ->showHeaderMenu($arrayButton,"Cucina 2.0","/PHPMasterTemplate/SitoRicette.php","#40c4ff");
$title = new Basic_components();
$title = $title -> printH1("Hai un suggerimento per qualche ricetta? Contattaci!","style='color:#2196f3;text-align:center;'");

$form = new general_form();
$form = $form-> createGeneralForm('test');

$div = new one_column_div();
$div -> setOneColumnDiv($form);


$footer =  new footer();
$footer->setFooter("Cucina 2.0","via Roma, Milano", "3490392829","tizianosantilli@gmail.com","tizio#sant.it","Siamo quello che mangiamo");
