<?php

class two_column_div{
    function setTwoColumnDiv(string $object1, string $object2, string $bgColor){
        $component = '<div class="row" style="background-color: '.$bgColor.'">
                          <div class="column column-2">'.$object1.'</div>
                          <div class="column column-2">'.$object2.'</div>
                      </div>';
        echo $component;
    }
}

