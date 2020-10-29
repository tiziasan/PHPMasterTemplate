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



$basic = new Basic_components();
$basic->setHead("Arch. Mario Rossi");

$form = new general_form();
$form -> printGeneralForm(
);