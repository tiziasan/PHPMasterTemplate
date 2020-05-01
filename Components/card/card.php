<?php

class card{

    function setCard($object){
        $component = '<div class="card">'.
                          $object
                      .'</div>';
        return $component;
    }
}