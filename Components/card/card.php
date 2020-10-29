<?php

class card{

    function setCard(string $object, string $attributes = null){
        $component = '<div class="card" '. $attributes . '>'.
                          $object
                      .'</div>';
        return $component;
    }
}