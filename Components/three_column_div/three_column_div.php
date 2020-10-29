<?php

class three_column_div{
    function setThreeColumnDiv(string $object1, string $object2, string $object3){
        $component = '<div class="row">
                          <div class="column column-3">'.$object1.'</div>
                          <div class="column column-3">'.$object2.'</div>
                          <div class="column column-3">'.$object3.'</div>
                      </div>';
        return $component;
    }


    function printThreeColumnDiv(string $object1, string $object2, string $object3){
        $component = '<div class="row">
                          <div class="column column-3">'.$object1.'</div>
                          <div class="column column-3">'.$object2.'</div>
                          <div class="column column-3">'.$object3.'</div>
                      </div>';
        echo $component;
    }
}