<?php
class basic_components{

    function setHead($title){
        $component = "<head><title>".$title."</title><link rel=\"stylesheet\" type=\"text/css\" href=\"Components/basic_components/body_style.css\"></head>";
        echo $component;
    }

    function setH1($body,$attributes){
        $component = "<h1 ". $attributes .  ">".$body."</h1>";
        echo $component;
    }

    function setH2($body,$attributes){
        $component = "<h2 ". $attributes .  ">".$body."</h2>";
        echo $component;
    }

    function setH3($body,$attributes){
        $component = "<h3 ". $attributes .  ">".$body."</h3>";
        echo $component;
    }

    function setH4($body,$attributes){
        $component = "<h4 ". $attributes .  ">".$body."</h4>";
        echo $component;
    }

    function setH5($body,$attributes){
        $component = "<h5 ". $attributes .  ">".$body."</h5>";
        echo $component;
    }

    function setH6($body,$attributes){
        $component = "<h6 ". $attributes .  ">".$body."</h6>";
        echo $component;
    }

    function setInput($attributes){
        $component ="<input".$attributes.">";
        echo $component;
    }

    function setBreakLine(){
        $component = "<br>";
        echo $component;
    }
    function setButton($body, $attributes){
        $component = "<button ".$attributes.">".$body."</button>";
        echo $component;

    }
    function setImg($attributes){
        $component = "<img".$attributes.">";
        echo $component;

    }

    function setLabel($body, $attributes){
        $component = "<label ".$attributes.">".$body."</label>";
        echo $component;
    }

    function setAReference($body, $attributes){
        $component = "<a ".$attributes.">".$body."</a>";
        echo $component;
    }

    function setOption($body, $attributes){
        $component = "<option ".$attributes.">".$body."</option>";
        echo $component;
    }

    function setParagraph($body, $attributes){
        $component = "<p ".$attributes.">".$body."</p>";
        echo $component;
    }

    function setQuote($body, $attributes){
        $component = "<q ".$attributes.">".$body."</q>";
        echo $component;
    }

    function setScript($body, $attributes){
        $component = "<script ".$attributes.">".$body."</script>";
        echo $component;
    }

    function setTextArea($body, $attributes){
        $component = "<textarea ".$attributes.">".$body."</textarea>";
        echo $component;
    }

    function setListItem($body, $attributes){
        $component = "<li ".$attributes.">".$body."</li>";
        echo $component;
    }












    //Passare oggetti come attributo

}

