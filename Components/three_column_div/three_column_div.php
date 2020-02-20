<?php

class three_column_div{
    function setThreeColumnDiv($object1, $object2, $object3){
        $component = '<div class="row">
                          <div class="column column-3">'.$object1.'</div>
                          <div class="column column-3">'.$object2.'</div>
                          <div class="column column-3">'.$object3.'</div>
                      </div>';
        echo $component;
    }
}