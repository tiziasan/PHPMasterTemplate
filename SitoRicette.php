<?php


include "Components/basic_components/basic_components.php";
include "Components/recipe_card/recipe_card.php";
include "Components/three_column_div/three_column_div.php";
include "Components/header_menu/header_menu.php";
include "Components/footer/footer.php";

$arrayButton = array(
    "Home" => "#",
    "Tutte le Ricette" => "./SitoRicette.php",
    "Contattaci" => "./SitoRicetteContatti.php",
);

$images = array("https://upload.wikimedia.org/wikipedia/it/8/83/No_immagini.png",
    "https://www.pcprofessionale.it/wp-content/uploads/2018/12/Colori-negativi.jpg",
    "https://cdn.pixabay.com/photo/2015/02/24/15/41/dog-647528_1280.jpg");


$basic = new Basic_components();
$basic->setHead("Cucina 2.0");

$headerMenu = new header_menu();
$headerMenu ->showHeaderMenu($arrayButton,"Cucina 2.0","#",'cerca.php',"#40c4ff");

$title = new Basic_components();
$title = $title -> printH1("Benvenuti al nostro blog di cucina","style='color:#2196f3; text-align:center;'");
$subtitle = new Basic_components();
$subtitle = $subtitle -> printH3("Nel blog Pensieri e Fornelli trovate una serie di ricette illustrate con foto. Antipasti, dolci, primi piatti, secondi, finger food e ricette per bambini. Come riporta il sito, gli autori, un’appassionata di cucina e un abile programmatore, si rivolgono a chi “non mette le sottilette nella parmigiana di melanzane.”","style='color:#2196f3; text-align:center; margin-left: 170px; margin-right: 170px'");

$card1 = new recipe_card();
$card1 = $card1 -> showRecipeCard("Spaghetti alla Carbonara", "20 minuti", "4 porzioni", "Facile", "Un classico della cucina italiana, attento alle uova e al guanciale!","Scopri la ricetta!","http://www.google.it","https://www.tavolartegusto.it/wp/wp-content/uploads/2020/03/Carbonara-Spaghetti-alla-carbonara-Ricetta-Carbonara.jpg");

$card2 = new recipe_card();
$card2 = $card2 -> showRecipeCard("Bucatini all'Amatriciana", "30 minuti", "4 porzioni", "Facile", "Una pietra miliare della cucina, solo se il guanciale è bello croccante!!","Scopri la ricetta!","http://www.google.it", "https://www.ricettedalmondo.it/images/foto-ricette/b/122-bucatini-alla-amatriciana.jpg");

$card3 = new recipe_card();
$card3 = $card3 -> showRecipeCard("Cheescake ai frutti rossi", "15 minuti", "4 porzioni", "Media", "Un dolce americano, ma che piace in tutto il mondo!","Scopri la ricetta!","http://www.google.it", "https://images.fidhouse.com/fidelitynews/wp-content/uploads/sites/6/2014/05/fredda3.jpg");

$div3col = new three_column_div();
$div3col ->setThreeColumnDiv($card1, $card2, $card3);

$card4 = new recipe_card();
$card4 = $card4 -> showRecipeCard("Latte e cereali", "5 minuti", "1 porzione", "Facile", "SQuale miglior modo di iniziare la giornata?!","Scopri la ricetta!","http://www.google.it", "https://www.colazionesalutare.it/wp-content/uploads/2019/03/colazione-latte-e-cereali.jpg");

$card5 = new recipe_card();
$card5 = $card5 -> showRecipeCard("Arrosto misto", "40 minuti", "3 porzioni", "Media", "Maiale, vitello, pollo e chi più ne ha più ne metta!!","Scopri la ricetta!","http://www.google.it", "https://media-cdn.tripadvisor.com/media/photo-s/17/86/eb/43/arrosto-misto-di-carne.jpg");

$card6 = new recipe_card();
$card6 = $card6 -> showRecipeCard("Bistecca", "20 minuti", "3 porzioni", "Media", "Cottura al sangue? prepariamo la bistecca perfetta!!","Scopri la ricetta!","http://www.google.it", "https://www.cucchiaio.it/content/cucchiaio/it/ricette/2015/06/bistecca-alla-fiorentina/jcr:content/imagePreview.img10.jpg/1435132063681.jpg");

$div3col2 = new three_column_div();
$div3col2 ->setThreeColumnDiv($card4, $card5, $card6);


$footer =  new footer();
$footer->setFooter("Cucina 2.0","via Roma, Milano", "3490392829","tizianosantilli@gmail.com","tizio#sant.it","Siamo quello che mangiamo");
