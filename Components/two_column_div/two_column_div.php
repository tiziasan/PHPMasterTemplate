<?php

class two_column_div{
    function setTwoColumnDiv(string $object1, string $object2){
        $component = '<div class="row">
                          <div class="column column-2">'.$object1.'</div>
                          <div class="column column-2">'.$object2.'</div>
                      </div>';
        echo $component;
    }
}