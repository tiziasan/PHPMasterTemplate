<?php
error_reporting(E_ALL);
ini_set("display_errors","On");

include "Components/basic_components/basic_components.php";
include "Components/recipe_card/recipe_card.php";
include "Components/three_column_div/three_column_div.php";
include "Components/header_menu/header_menu.php";
include "Components/footer/footer.php";
include "Components/two_column_div/two_column_div.php";
include "Components/payment_form/payment_form.php";


$arrayButton = array();

$basic = new Basic_components();
$basic->setHead("Enciclopedia della storia Italiana");

$headerMenu = new header_menu();
$headerMenu ->showHeaderMenu($arrayButton,"Enciclopedia della storia Italiana","#","#388e3c");

$title = new Basic_components();
$title = $title -> printH1("Enciclopedia della storia Italiana","style='color:#1b5e20;text-align:center;'");
$subtitle = new Basic_components();
$subtitle = $subtitle -> printH3("L'Enciclopedia Italiana di scienze, lettere ed arti (abbreviata in Enciclopedia Italiana), comunemente nota come La Treccani, è la più famosa enciclopedia in lingua italiana, edita a cura dell'Istituto dell'Enciclopedia Italiana, fondato a Roma il 18 febbraio 1925 da Giovanni Treccani e Giovanni Gentile. La prima edizione fu pubblicata in 35 volumi, più uno di indici, dal 1929 al 1937, cui sono seguite nel corso degli anni nove appendici. La Treccani è considerata come probabilmente la massima impresa editoriale italiana in ambito culturale,[1] nonché una delle più importanti enciclopedie del XX secolo, insieme all'XI edizione dell'Encyclopædia Britannica e all'Enciclopedia universal ilustrada europeo-americana.","style='color:#1b5e20; text-align:center; margin-left: 170px; margin-right: 170px'");

$bookImg = new Basic_components();
$bookImg = $bookImg ->setImg("src = 'https://pictures.abebooks.com/BOOKSANDBOOKSFORSALE/22676107932.jpg'");

$para = new Basic_components();
$para = $para -> setParagraph("La raccolta è composta da più di 10 libri tra cui:");

$element1 = new Basic_components();
$element1 = $element1->setListItem("Preistoria");
$element2 = new Basic_components();
$element2 = $element2->setListItem("Antichi Egizi");
$element3 = new Basic_components();
$element3 = $element3->setListItem("Impero Romano");
$element4 = new Basic_components();
$element4 = $element4->setListItem("Impero Ungarico");
$element5 = new Basic_components();
$element5 = $element5->setListItem("Alto Medioevo");
$element6 = new Basic_components();
$element6 = $element6->setListItem("Basso Medioevo");

$arrayList = array($element1,$element2,$element3, $element4, $element5, $element6);

$list = new Basic_components();
$list = $list -> setListElement($arrayList);

$para = $para.$list;
$div = new two_column_div();
$div -> setTwoColumnDiv($para, $bookImg, "#66bb6a");


$para2 = new Basic_components();
$para2 = $para2 -> setParagraph("Puoi avere l'intera raccolta al prezzo speciale di 150 euro iva inclusa. Per i primi 100 clienti in omaggio anche la nostra guida sui migliori ristoranti Italiani!");

$pay = new payment_form();
$pay = $pay -> inset_payment_form();

$div2 = new two_column_div();
$div2 -> setTwoColumnDiv($para2, $pay, "#ffffff");



$footer =  new footer();
$footer->setFooter("Enciclopedia della storia Italiana","via Roma, Milano", "3490392829","tizianosantilli@gmail.com","tizio#sant.it","Mondadori editions");
