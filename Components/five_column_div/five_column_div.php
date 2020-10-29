<?php

class five_column_div{
    function setFiveColumnDiv(string $object1, string $object2, string $object3, string $object4, string $object5){
        $component = '<div class="row">
                          <div class="column column-5">'.$object1.'</div>
                          <div class="column column-5">'.$object2.'</div>
                          <div class="column column-5">'.$object3.'</div>
                          <div class="column column-5">'.$object4.'</div>
                          <div class="column column-5">'.$object5.'</div>
                      </div>';
        return $component;
    }

    function printFiveColumnDiv(string $object1, string $object2, string $object3, string $object4, string $object5){
        $component = '<div class="row">
                          <div class="column column-5">'.$object1.'</div>
                          <div class="column column-5">'.$object2.'</div>
                          <div class="column column-5">'.$object3.'</div>
                          <div class="column column-5">'.$object4.'</div>
                          <div class="column column-5">'.$object5.'</div>
                      </div>';
        echo $component;
    }
}