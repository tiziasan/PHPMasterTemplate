<?php

class four_column_div{
    function setFourColumnDiv(string $object1, string $object2, string $object3, string $object4){
        $component = '<div class="row">
                          <div class="column column-4">'.$object1.'</div>
                          <div class="column column-4">'.$object2.'</div>
                          <div class="column column-4">'.$object3.'</div>
                          <div class="column column-4">'.$object4.'</div>
                      </div>';
        echo $component;
    }
}