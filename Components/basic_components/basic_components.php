<?php
class basic_components{

    function setH1($string){
        $string = "<h1>".$string."</h1>";
        echo $string;
    }

    function setH2($string){
        $string = "<h2>".$string."</h2>";
        echo $string;
    }
}