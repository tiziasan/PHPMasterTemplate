<?php

class two_column_div{
    function setTwoColumnDiv(string $object1, string $object2, string $attributes = null){
        $component = '<div class="row" '. $attributes. '>
                          <div class="column column-2">'.$object1.'</div>
                          <div class="column column-2">'.$object2.'</div>
                      </div>';
        return $component;
    }

    function printTwoColumnDiv(string $object1, string $object2, string $attributes = null){
        $component = '<div class="row" '. $attributes. '>
                          <div class="column column-2">'.$object1.'</div>
                          <div class="column column-2">'.$object2.'</div>
                      </div>';
        echo $component;
    }
}

