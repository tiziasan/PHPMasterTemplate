<?php
class basic_components{

    function setHead($title){
        $component = "<head><title>".$title."</title><link rel=\"stylesheet\" type=\"text/css\" href=\"Components/basic_components/style.css\"></head>";
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

    //Passare oggetti come attributo

}

