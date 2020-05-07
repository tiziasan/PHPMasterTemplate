<?php

class card{

    function setCard(string $object){
        $component = '<div class="card">'.
                          $object
                      .'</div>';
        return $component;
    }
}