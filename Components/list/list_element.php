<?php
include_once "Components/basic_components/basic_components.php";

class list_element{

    function setListElement(array $elements){
        $component="";

        $component .= "<ul>";
        foreach ($elements as $element){
            $component .= $element;
        }
        $component .= "</ul>";
        echo $component;
    }

}