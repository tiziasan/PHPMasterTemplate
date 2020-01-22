<?php
class Basic_components{

    function setHead($title){
        $component = "<head><title>".$title."</title><link rel=\"stylesheet\" type=\"text/css\" href=\"Components/basic_components/style.css\"></head>";
        $component .= "<link rel=\"stylesheet\" type=\"text/css\" href=\"Components/recipe_card/recipe_card_style.css\">";
        $component .= "<link rel=\"stylesheet\" type=\"text/css\" href=\"Components/login_form/login_form_style.css\">";
        $component .= "<link rel=\"stylesheet\" type=\"text/css\" href=\"Components/news/news_style.css\">";
        $component .= "<link rel=\"stylesheet\" type=\"text/css\" href=\"Components/profile_card/profile_card_style.css\">";
        $component .= "<link rel=\"stylesheet\" type=\"text/css\" href=\"Components/header_menu/header_menu_style.css\">";
        $component .= "<link rel=\"stylesheet\" type=\"text/css\" href=\"Components/three_column_div/three_column_div_style.css\">";
        $component .= "<link rel=\"stylesheet\" type=\"text/css\" href=\"Components/map/map_style.css\">";
        $component .= "<link rel=\"stylesheet\" type=\"text/css\" href=\"Components/news/news_style.css\">";

        echo $component;
    }

    function setH1($body,$attributes = null){
        $component = "<h1 ". $attributes .  ">".$body."</h1>";
        return $component;
    }

    function setH2($body,$attributes = null){
        $component = "<h2 ". $attributes .  ">".$body."</h2>";
        return $component;
    }

    function setH3($body,$attributes = null){
        $component = "<h3 ". $attributes .  ">".$body."</h3>";
        return $component;
    }

    function setH4($body,$attributes = null){
        $component = "<h4 ". $attributes .  ">".$body."</h4>";
        return $component;
    }

    function setH5($body,$attributes = null){
        $component = "<h5 ". $attributes .  ">".$body."</h5>";
        return $component;
    }

    function setH6($body,$attributes = null){
        $component = "<h6 ". $attributes .  ">".$body."</h6>";
        return $component;
    }

    function setInput($attributes = null){
        $component ="<input ".$attributes.">";
        return $component;
    }

    function setBreakLine(){
        $component = "<br>";
        return $component;
    }
    function setButton($body, $attributes = null){
        $component = "<button ".$attributes.">".$body."</button>";
        return $component;

    }
    function setImg($attributes = null){
        $component = "<img".$attributes.">";
        return $component;

    }

    function setLabel($body, $attributes = null){
        $component = "<label ".$attributes.">".$body."</label>";
        return $component;
    }

    function setAReference($body, $attributes = null){
        $component = "<a ".$attributes.">".$body."</a>";
        return $component;
    }

    function setOption($body, $attributes = null){
        $component = "<option ".$attributes.">".$body."</option>";
        return $component;
    }

    function setParagraph($body, $attributes = null){
        $component = "<p ".$attributes.">".$body."</p>";
        return $component;
    }

    function setQuote($body, $attributes = null){
        $component = "<q ".$attributes.">".$body."</q>";
        return $component;
    }

    function setScript($body, $attributes = null){
        $component = "<script ".$attributes.">".$body."</script>";
        return $component;
    }

    function setTextArea($body, $attributes = null){
        $component = "<textarea ".$attributes.">".$body."</textarea>";
        return $component;
    }

    function setListItem($body, $attributes = null){
        $component = "<li ".$attributes.">".$body."</li>";
        return $component;
    }


    function printH1($body,$attributes = null){
        $component = "<h1 ". $attributes .  ">".$body."</h1>";
        echo $component;
    }

    function printH2($body,$attributes = null){
        $component = "<h2 ". $attributes .  ">".$body."</h2>";
        echo $component;
    }

    function printH3($body,$attributes = null){
        $component = "<h3 ". $attributes .  ">".$body."</h3>";
        echo $component;
    }

    function printH4($body,$attributes = null){
        $component = "<h4 ". $attributes .  ">".$body."</h4>";
        echo $component;
    }

    function printH5($body,$attributes = null){
        $component = "<h5 ". $attributes .  ">".$body."</h5>";
        echo $component;
    }

    function printH6($body,$attributes = null){
        $component = "<h6 ". $attributes .  ">".$body."</h6>";
        echo $component;
    }

    function printInput($attributes = null){
        $component ="<input ".$attributes.">";
        echo $component;
    }

    function printBreakLine(){
        $component = "<br>";
        echo $component;
    }
    function printButton($body, $attributes = null){
        $component = "<button ".$attributes.">".$body."</button>";
        echo $component;

    }
    function printImg($attributes = null){
        $component = "<img".$attributes.">";
        echo $component;

    }

    function printLabel($body, $attributes = null){
        $component = "<label ".$attributes.">".$body."</label>";
        echo $component;
    }

    function printAReference($body, $attributes = null){
        $component = "<a ".$attributes.">".$body."</a>";
        echo $component;
    }

    function printOption($body, $attributes = null){
        $component = "<option ".$attributes.">".$body."</option>";
        echo $component;
    }

    function printParagraph($body, $attributes = null){
        $component = "<p ".$attributes.">".$body."</p>";
        echo $component;
    }

    function printQuote($body, $attributes = null){
        $component = "<q ".$attributes.">".$body."</q>";
        echo $component;
    }

    function printScript($body, $attributes = null){
        $component = "<script ".$attributes.">".$body."</script>";
        echo $component;
    }

    function printTextArea($body, $attributes = null){
        $component = "<textarea ".$attributes.">".$body."</textarea>";
        echo $component;
    }

    function printListItem($body, $attributes = null){
        $component = "<li ".$attributes.">".$body."</li>";
        echo $component;
    }
}

